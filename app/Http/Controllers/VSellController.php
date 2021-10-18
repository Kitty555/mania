<?php

namespace App\Http\Controllers;

use App\Models\MItem;
use App\Models\MPopularCharacter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VSellController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $popular = MPopularCharacter::with('game')->get()->toArray();
        return view('mania.sell.main',[
            'popular'=>$popular,
            'user'=>$this->user
        ]);
    }

    public function index_view(Request $request)
    {
        $orderNo=  $request->orderNo;
        $item = MItem::with(['game','server'])->where('userId',$this->user->id)->where('orderNo',$orderNo)->first();
        if($item == null) $item = array();
        return view('mania.sell.index_view',$item);
    }

    public function sell_view(Request $request)
    {
        $orderNo = $request->id;

        $game = MItem::with(['game','server','user'])->where('orderNo',$orderNo)->where("userId","!=",$this->user->id)->first();
        if(empty($game)){
            echo '<script>alert("잘못된 접근입니다.");window.history.back();</script>';
            return;
        }
        return view('mania.sell.sell_view',$game);
    }

    public function sell_application(Request $request)
    {
        $id = $request->id;
        $game = MItem::with(['game','server','user'])
            ->where('orderNo',$id)
            ->where('userId',"!=",$this->user->id)
            ->where('status',0)
            ->where('type','sell')->first();
        if(empty($game)){
            echo '<script>alert("정상적인 경로를 이용해주세요.");window.history.back();</script>';
            return;
        }
        return view('mania.sell.sell_application',$game);
    }

    /**
     * 판매페이지 > 물품제목 > 설정
     */
    public function fixed_trade_subject()
    {
        return view('mania.sell.fixed_trade_subject');
    }

    public function list_search()
    {
        return view('mania.sell.list_search');
    }

    /**
     * 판매페이지 > 연락처수정 버튼
     */
    public function user_contact_edit()
    {
        return view('mania.sell.user_contact_edit');
    }

    public function ajax_template()
    {
        return view('mania.sell.index_template');
    }
}
