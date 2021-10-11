<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VBuyController extends Controller
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
}
