<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedImages;

class FeaturedImagesController extends Controller
{
    //
    function read(){
        $post = FeaturedImages::find(2)
        ->post;
        return $post;
    }
}
