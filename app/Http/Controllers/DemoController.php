<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class DemoController extends Controller
{
    //phương thức gửi mail cho khách hàng
    function sendMail(){
        $data=[
            'key1'=>'Dữ liệu được đọc từ controller'
        ];
        Mail::to('thisisminh172@gmail.com')->send(new DemoMail($data));
    }
}
