<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request){
        // $request->session()->put('username','leminh');
        // $request->session()->put('login',true);

        session(['username'=>'leminh']);
        return redirect('session/show');
    }

    function show(Request $request){
        //  return $request->session()->all();

        if($request->session()->has('username')){
            echo "Đã lưu username vào session";
        }else{
            echo "Session này không tồn tại";
        }
        // return $request->session()->get('username');
        // return $request->session()->get('status');
        #######
        //khi dùng helper session
        return session('username');
    }

    function add_flash(Request $request){
        $request->session()->flash('status','Bạn đã thêm sản phẩm thành công');

    }

    function delete(Request $request){
        $request->session()->forget('username','login');
        // return redirect()->action('SessionController@show');

        $request->session()->flush();
        // return redirect()->action('SessionController@show');

    }

    
}
