<?php

namespace App\Http\Controllers;

use App\Models\MItem;
use Illuminate\Http\Request;

class VMyRoomController extends BaseController
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
        return view('mania.myroom.main');
    }

    public function message()
    {
        return view('mania.myroom.message');
    }

    public function alarm_sell_list()
    {
        return view('mania.myroom.alarm_sell_list');
    }

    public function complete_sell()
    {
        return view('mania.myroom.complete_sell');
    }

    public function complete_cancel_sell()
    {
        return view('mania.myroom.complete_cancel_sell');
    }

    public function sell_pay_wait_view()
    {
        return view('mania.myroom.sell_pay_wait_view');
    }

    public function sell_regist()
    {
        return view('mania.myroom.sell_regist');
    }

    public function sell_regist_view(Request $request)
    {
        $id = $request->id;
        $game = MItem::with(['user','game','server'])->where("orderNo",$id)->where("userId",$this->user->id)->first();

        if(empty($game)){
            echo '<script>alert("잘못된 요청입니다.");window.history.back()</script>';
            return;
        }
        return view('mania.myroom.sell_regist_view',$game);
    }

    public function sell_re_reg()
    {
        return view('mania.myroom.buy_re_reg');
    }

    public function buy_regist()
    {
        return view('mania.myroom.buy_regist');
    }

    public function buy_regist_view()
    {
        return view('mania.myroom.buy_regist_view');
    }

    public function buy_re_reg()
    {
        return view('mania.myroom.buy_re_reg');
    }
}
