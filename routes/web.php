<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

####giỏ hàng
Route::get('/','ProductController@show');
Route::get('cart/show','CartController@show');
Route::get('cart/add/{id}','CartController@add')->name('cart.add');

// Route::get('users/insert',function(){
//     DB::table('users')->insert(
//         ['name'=>'Trung','email'=>'trung@gmail.com','password'=>bcrypt('trung')]
//     );
// });

// Route::get('posts/add','PostController@add');

// Route::get('posts/show','PostController@show');
// Route::get('posts/update/{id}','PostController@update');
// Route::get('posts/delete/{id}','PostController@delete');
// Route::get('posts/restore/{id}','PostController@restore');
// Route::get('posts/permanentlydelete/{id}','PostController@permanentlyDelete');

// Route::get('products/add','ProductController@add');
// Route::get('products/select/{id}','ProductController@select');
// Route::get('products/update/{id}','ProductController@update');
// Route::get('products/delete/{id}','ProductController@delete');

######
//ELOquent orm
// Route::get('posts/read', function(){
//     $posts = Post::all();
//     return $posts;
// });
// Route::get('posts/read','PostController@read');
// Route::get('images/read','FeaturedImagesController@read');

// #############
// Route::get('role/show','RoleController@show');

##############FORM
Route::get('post/add', 'PostController@add');
Route::post('post/store','PostController@store');
Route::get('user/reg', 'UserController@add');
Route::get('post/show','PostController@show')->name('post.show');

#####Helper url
Route::get('helper/url','HelperController@url');
####Helper string
Route::get('helper/string','HelperController@string');

#######
Route::get('session/add','SessionController@add');
Route::get('session/show','SessionController@show');
Route::get('session/add_flash','SessionController@add_flash');
Route::get('session/delete','SessionController@delete');


Route::get('cookie/set','CookieController@set');
Route::get('cookie/get','CookieController@get');

######### send mail
Route::get('demo/sendmail','DemoController@sendMail');

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


