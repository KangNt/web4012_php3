<?php

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
use App\Models\User;
use App\Http\Controllers\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;    

Route::get('/','HomeController@index')->name('admin');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([
    'prefix'=>'users',
    'as'=>'users.',
],function(){
    Route::get('/','UserController@index')->name('index');// hiển thị tất cả tài nguyên
    Route::get('/create','UserController@create')->name('create');//tạo mới
    Route::post('/store','UserController@store')->name('store');//lưu trữ một tài nguyên mới
    Route::get('/edit/{id}','UserController@edit')->name('edit');// sửa một tài nguyên theo tham số truyền vào
    Route::post('/update','UserController@update')->name('update');//cập nhật 1 tài nguyên theo tham số truyền vào
    Route::get('/show','UserController@show')->name('show');
    Route::post('/destroy/{id}','UserController@destroy')->name('destroy');//xóa 1 tài nguyên
});

Route::get('login', 'AuthController@getLoginForm')->name('auth.login_form');
Route::post('login', 'AuthController@login')->name('auth.login');
/**---------------------------------------------------------------------------------------------------------- */

Route::group([
    'prefix'=>'posts',
    'as'=>'posts.',
],function(){
    Route::get('/','PostController@index')->name('index');// hiển thị tất cả tài nguyên
    Route::get('/create','PostController@create')->name('create');//tạo mới
    Route::post('/store','PostController@store')->name('store');//lưu trữ một tài nguyên mới
    Route::get('/edit/{id}','PostController@edit')->name('edit');// sửa một tài nguyên theo tham số truyền vào
    Route::post('/update','PostController@update')->name('update');//cập nhật 1 tài nguyên theo tham số truyền vào
    Route::post('/destroy/{id}','PostController@destroy')->name('destroy');//xóa 1 tài nguyên
});


/**------------------------------------------------------------------------------------------------------ */
Route::group([
    'prefix'=>'categories',
    'as'=>'categories.',
],function(){
    Route::get('/','CategorieController@index')->name('index');// hiển thị tất cả tài nguyên
    Route::get('/create','CategorieController@create')->name('create');//tạo mới
    Route::post('/store','CategorieController@store')->name('store');//lưu trữ một tài nguyên mới
    Route::get('/edit/{id}','CategorieController@edit')->name('edit');// sửa một tài nguyên theo tham số truyền vào
    Route::post('/update','CategorieController@update')->name('update');//cập nhật 1 tài nguyên theo tham số truyền vào
    Route::post('/destroy/{id}','CategorieController@destroy')->name('destroy');//xóa 1 tài nguyên
});

/**------------------------------------------------------------------------------------------------------ */
Route::group([
    'prefix'=>'comments',
    'as'=>'comments.',
],function(){
    Route::get('/','CommentController@index')->name('index');// hiển thị tất cả tài nguyên
    Route::get('/create','CommentController@create')->name('create');//tạo mới
    Route::post('/store','CommentController@store')->name('store');//lưu trữ một tài nguyên mới
    Route::get('/edit/{id}','CommentController@edit')->name('edit');// sửa một tài nguyên theo tham số truyền vào
    Route::post('/update','CommentController@update')->name('update');//cập nhật 1 tài nguyên theo tham số truyền vào
    Route::post('/destroy/{id}','CommentController@destroy')->name('destroy');//xóa 1 tài nguyên
});

