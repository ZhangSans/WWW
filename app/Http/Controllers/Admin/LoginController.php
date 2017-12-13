<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//继承后台公共控制器CommonController
class LoginController extends CommonController{
    public function login()
    {
        return view('admin.login');
    }
}