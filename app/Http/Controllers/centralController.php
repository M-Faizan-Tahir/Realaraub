<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class centralController extends Controller
{
    function add_products(Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_category'=>'required',
            'product_description'=>'required',
        ]);
        $products = new Products;
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        $products->product_category = $request->product_category;
        $products->product_description = $request->product_description;
        $products->save();

    }
    function add_user(Request $request){
        

        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required',
            'user_password'=>'required',
            'user_role'=>'required',
        ]);
        $users = new Users;
        $users->user_name = $request->user_name;
        $users->user_email = $request->user_email;
        $users->user_password = $request->user_password;
        $users->user_role = $request->user_role;
        $users->save();
        
    }
    function punch_order(Request $request){
        $request->validate([
            'order_id'=>'required',
            'product_id'=>'required',
            'product_quantity'=>'required',
            'order_status'=>'required',
            'order_date'=>'required',
            'order_time'=>'required',
            'order_total'=>'required',
        ]);
        $orders = new Orders;
        $orders->order_id = $request->order_id;
        $orders->product_id = $request->product_id;
        $orders->product_quantity = $request->product_quantity;
        $orders->order_status = $request->order_status;
        $orders->order_date = $request->order_date;
        $orders->order_time = $request->order_time;
        $orders->order_total = $request->order_total;
        $orders->save();
        
    }

}

