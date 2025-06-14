<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }
    public function about()
    {
        return view('about');
    }
}