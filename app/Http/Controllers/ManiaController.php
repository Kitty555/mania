<?php

namespace App\Http\Controllers;

use App\Models\MChgame;
use App\Models\MGame;
use App\Models\MItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManiaController extends Controller
{
    //
    public function addservice(Request $request){
        $user  = Auth::user();
        $params = $request->all();
        $user_premium_time   = $params->user_premium_time;
        $user_icon_use   = $params->user_icon_use;
        $user_bluepen_use   = $params->user_bluepen_use;
        $user_quickicon_use   = $params->user_quickicon_use;
        $rereg_count = $params->rereg_count;
        $rereg_time = $params->rereg_time;
        $charge_money=  $params->charge_money;
        if($charge_money > 0 && $user->money < $charge_money){
            echo json_encode(array("status"=>0,'msg'=>'마일리지가 충분치 않습니다.'));
            return;
        }
        unset($params->user_premium_time);
        unset($params->user_icon_use);
        unset($params->user_bluepen_use);
        unset($params->user_quickicon_use);
        unset($params->rereg_count);
        unset($params->rereg_time);
        $params->orderNo = date("Ymd").generateRandomString(8);
        $insertId = MItem::create($params);
        if($insertId > 0){
            $premium_array = array();
            $premium_inserts = array();
            $premium_array['post_id'] = $insertId;
            if(!empty($user_premium_time)){
                $premium_array['type'] = 1;
                $premium_array['until'] = date("Y-m-d H:i:s", strtotime('+'.$user_premium_time.' hours'));
                array_push($premium_inserts,$premium_array);
            }
            if(!empty($user_icon_use)){
                $premium_array['type'] = 2;
                $premium_array['until'] = date("Y-m-d H:i:s", strtotime('+'.$user_icon_use.' hours'));
                array_push($premium_inserts,$premium_array);
            }
            if(!empty($user_bluepen_use)){
                $premium_array['type'] = 3;
                $premium_array['until'] = date("Y-m-d H:i:s", strtotime('+'.$user_bluepen_use.' hours'));
                array_push($premium_inserts,$premium_array);
            }
            if(!empty($user_quickicon_use)){
                $premium_array['type'] = 4;
                $premium_array['until'] = date("Y-m-d H:i:s", strtotime('+'.$user_quickicon_use.' hours'));
                array_push($premium_inserts,$premium_array);
            }
            if(!empty($rereg_count) && !empty($rereg_time)){
                $premium_array['type'] = 5;
                $premium_array['re_count'] = $rereg_count;
                $premium_array['re_minutes'] = $rereg_time;
                array_push($premium_inserts,$premium_array);
            }
            if(!empty($premium_inserts) && $charge_money > 0){
                $user->money = $user->money - $charge_money;
                $user->save();
                MItem::insert($premium_inserts);
                MPayhistory:create(['type'=>'premium',
                                    'mania_code'=>$insertId,
                                    'price'=>$charge_money,
                                    'status'=>1]);

            }
            if ($request->hasFile('user_screen')) {
                foreach($request->file('user_screen') as $file){
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $bankbook = $filename .'_'.time().'.' . $extension;
                    $file->storeAs('public/assets/images/mania/'.$insertId.'/', $bankbook);
                }

            }
            echo json_encode(array("status"=>1,'msg'=>''));
        }
        else{
            echo json_encode(array("status"=>0,'msg'=>'요청 오류.'));
        }
    }

    public function getChrGames(Request $request){
        $games = MChgame::get()->toArray();

        foreach($games as $key=>$item){
           $games[$key]['twegames'] = MGame::where('parent',$item['game_id'])->where('depth',1)->orderBy('order',"ASC")->limit(12)->get()->toArray();
        }
        var_dump($games);
    }

    public function getDetailsGame(Request $request){
        $orderNo = $request->id;
        $details  = MItem::with('user.contact')->where('orderNo',$orderNo)->first();
        if(empty($orderNo) || empty($details)){
            echo '<script>alert("정상적인 경로로 이용하세요.");window.history.go(-1);</script>>';
            return;
        }
    }

    public function gameList(){
        $gamelist = $serverlist = array();
        $data = MGame::with('firstOfproperty')->where("depth",0)->where("status",1)->get()->toArray();
        foreach($data as $item){
            $temp = array();
            $temp["C"] = $item["id"];
            $temp["N"] = $item["game"];
            $temp["BG"] = 0;
            $temp["L"] = 99;
            $temp["U"] = $item["first_ofproperty"]["game"];
            $temp["S"] = $item["tag"];
            $temp["CV"] = "y";
            array_push($gamelist,$temp);
        }
        $data = MGame::with('threeOfproperty.firstOfproperty')->where("depth",1)->where("status",1)->orderBy("order","ASC")->get()->toArray();
        foreach($data as $item){
            $temp = array();
            $temp["GC"] = $item["parent"];
            $temp["C"] = $item["id"];
            $temp["N"] = $item["game"];
            $temp["BG"] = $item["order"];
            $temp["M"] = '';
            $temp["U"] = $item["three_ofproperty"]["first_ofproperty"]["game"];
            array_push($serverlist,$temp);
        }
        echo json_encode(array("gamelist"=>$gamelist,"serverlist"=>$serverlist));
    }
}
