<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    //进入登陆页面
   public function index(){
            return view('home.login');
    }
    //进入注册页面
    public function register(){
            return view('home.register');
    }
}
