<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VMyRoomController extends BaseController
{
    public function __construct()
    {

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

    public function alarm_add()
    {
        return view('mania.myroom.alarm_add');
    }

    public function complete_sell()
    {
        return view('mania.myroom.complete_sell');
    }

    public function complete_cancel_sell()
    {
        return view('mania.myroom.complete_cancel_sell');
    }

    public function complete_cancel_buy()
    {
        return view('mania.myroom.complete_cancel_buy');
    }

    public function complete_buy()
    {
        return view('mania.myroom.complete_buy');
    }

    public function complete_report()
    {
        return view('mania.myroom.complete_report');
    }

    public function sell_pay_wait_view()
    {
        return view('mania.myroom.sell_pay_wait_view');
    }

    public function sell_regist()
    {
        return view('mania.myroom.sell_regist');
    }

    public function sell_ing()
    {
        return view('mania.myroom.sell_ing');
    }

    public function sell_check()
    {
        return view('mania.myroom.sell_check');
    }

    public function sell_regist_view()
    {
        return view('mania.myroom.sell_regist_view');
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

    public function buy_check()
    {
        return view('mania.myroom.buy_check');
    }

    public function buy_ing()
    {
        return view('mania.myroom.buy_ing');
    }

    public function buy_pay_wait()
    {
        return view('mania.myroom.buy_pay_wait');
    }

    /***************** Resion 마일리지 ****************/
    /**
     * 마이룸 > 마일리지 > 내 마일리지 > 마이리지 현황
     */
    public function my_mileage_index()
    {
        return view('mania.myroom.mileage.my_mileage.index');
    }
    /**
     * * 마이룸 > 마일리지 > 내 마일리지 > 마일리지 달력보기
     */
    public function my_mileage_calendar()
    {
        return view('mania.myroom.mileage.my_mileage.calendar');
    }
    /**
     * * 마이룸 > 마일리지 > 내 마일리지 > 마일리지 달력보기
     */
    public function my_mileage_detail_list()
    {
        return view('mania.myroom.mileage.my_mileage.detail_list');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지 충전
     */
    public function mileage_guide_charge()
    {
        return view('mania.myroom.mileage.guide.charge');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지 출금
     */
    public function payment_index()
    {
        return view('mania.myroom.mileage.payment.index');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지  > 휴대폰번호 출금
     */
    public function payment_phone()
    {
        return view('mania.myroom.mileage.payment.payment_phone');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지  > 마일리지 출금내역 보기
     */
    public function payment_list()
    {
        return view('mania.myroom.mileage.payment.payment_list');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지  > 휴대폰번호 출금내역 보기
     */
    public function payment_phone_list()
    {
        return view('mania.myroom.mileage.payment.payment_phone_list');
    }
    /**
     * 마이룸 > 마일리지 > 마일리지  > 마일리지 전환
     */
    public function culturecash()
    {
        return view('mania.myroom.mileage.payment.change.culturecash');
    }
    /*************************************************/
}
