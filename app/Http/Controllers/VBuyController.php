<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VBuyController extends BaseController
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
        return view('mania.buy.main');
    }

    public function index_view()
    {
        return view('mania.buy.index_view');
    }

    public function list_search()
    {
        return view('mania.buy.list_search');
    }
}
