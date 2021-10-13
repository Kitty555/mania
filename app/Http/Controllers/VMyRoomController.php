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

    public function sell_regist_view()
    {
        return view('mania.myroom.sell_regist_view');
    }
}
