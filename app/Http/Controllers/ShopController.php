<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function productDetails()
    {
        return view('shop.product-details');
    }
}
