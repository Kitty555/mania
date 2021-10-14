<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VAjaxController extends BaseController
{
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quicklinkuser()
    {
        return view('mania.ajax.quicklinkuser');
    }
   
}
