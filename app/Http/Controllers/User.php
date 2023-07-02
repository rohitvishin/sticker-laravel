<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    public function product_list()
    {
        return view('user.product_list');
    }
    public function product_detail()
    {
        return view('user.product_detail');
    }
}
