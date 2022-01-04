<?php
declare (strict_types=1);

namespace app\home\controller;

use app\home\model\User;

class Index
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        $userData=User::select();
        return  view('home',compact('userData'));
    }
}
