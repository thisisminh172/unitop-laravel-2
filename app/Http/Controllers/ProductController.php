<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;


class ProductController extends Controller
{
    //
    // public function add(){
    //     DB::table('products')->insert(
    //         [
    //         'name'=>'coca',
    //         'content'=>'nuoc giai khat',
    //         'price'=>12000,
    //         'product_cat_id'=>'1',
    //         'user_id'=>1
    //         ]);
    // }

    // public function select($id){
    //     $product = DB::table('products')
    //     ->where('id',$id)
    //     ->get();
    //     echo "<pre>";
    //     print_r($product);
    // }

    // public function update($id){
    //     DB::table('products')
    //     ->where('id',$id)
    //     ->update([
    //         'price'=>14999
    //     ]);
    // }

    // public function delete($id){
    //     DB::table('products')
    //     ->where('id',$id)
    //     ->delete();
    // }

    public function show(){
        $products = Product::all();
        // return $products;
        return view('product.show',compact('products'));
    }
}
