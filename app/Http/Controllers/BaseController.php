<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public $user;
    public function  __construct()
    {
        $this->isLogged = false;
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                $this->isLogged = true;
                $this->user = Auth::user();
            }
            return $next($request);
        });
    }
}
