<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VSellController extends BaseController
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
        return view('mania.sell.main');
    }

    public function index_view()
    {
        return view('mania.sell.index_view');
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
