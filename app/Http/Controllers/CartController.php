<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //
    function show(){
        return view('cart.show');
    }
    function add($id){

        echo 'thêm sản phẩm giỏ hàng';
        Cart::add($id, "Product {$id}", 1, 9.99);
        echo "<pre>";
        print_r(Cart::content());
        // return Cart::content();
    }
}
