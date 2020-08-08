<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    public function url()
    {
        // 1. Tạo url cơ bản
        // unitop.vn => unitop.vn/login
        #####
        // $url = url('login');
        #####
        // 2. tạo url qua route
        // $url = route('post.show');
        #####
        // 3. Tạo url qua action
        // $url = action('PostController@store');
        ####
        //4. lấy current url
        $url = url()->current();

        echo $url;
    }

    public function string()
    {
        // 1. Lấy độ dài chuỗi
        // $str_1 = 'unitop.vn';
        // echo Str::length($str_1);
        ####
        //2. In thường 1 chuỗi
        // $str = "Lê Minh";
        // echo Str::lower($str);
        // echo Str::upper($str);
        ######
        //3. random string
        // echo Str::random(20);
        ####
        //4. loại bỏ ký tự dư thừa
        // $str = Str::of('  unitop.vn        da  ')->trim();
        // echo $str;
        ######
        //5. Lấy chưỡi con trong chuỗi dài
        // $str = "laravel pro";
        // echo Str::of($str)->substr(8);
        // echo Str::of($str)->substr(0,7);
        #####
        // 6. Tạo ra slug => làm link thân thiện
        //unitop.vn học web đi làm => unitop.vn-hoc-web-di-lam
        // $str = Str::slug('unitop.vn học web đi làm');
        // echo $str;
        #######
        // 8. Nối chuỗi vào đuôi
        // echo Str::of('Lê ')->append('Minh')->append(' Nga');
        ######
        //9. Tìm kím và thay thế chuỗi
        // $str = "laravel 7x";
        // echo $str;
        // echo Str::of($str)->replace('7x', '6x');
        ######
        //10. Cắt chuỗi dài với số ký tự cho trước
        // $str = "Viện Pasteur Nha Trang giải thích việc ngừng nhận mẫu xét nghiệm nCoV";
        // echo Str::of($str)->limit(30);
        #######
        //11. kiểm tra chuỗi cha chứa chuỗi con
        $str = "unitop.vn học lập trình đi làm";
        echo Str::contains($str,'unitop');

    }
}
