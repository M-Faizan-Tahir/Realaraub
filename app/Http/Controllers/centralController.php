<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class centralController extends Controller
{
    function add_products(){
        return view('add_products');
    }
    function add_user(){
        return view('add_user');
    }
    function punch_order(){
        return view('punch_order');
    }
}

