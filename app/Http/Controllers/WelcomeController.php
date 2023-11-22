<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function product()
    {
        return view('product');
    }

    public function detailProduct()
    {
        return view('product_detail');
    }

    public function cart()
    {
        return view('cart');
    }

    public function order()
    {
        return view('order');
    }

    public function list_ukm()
    {
        return view('view_more_ukm');
    }
}
