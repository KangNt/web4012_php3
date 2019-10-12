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
use Illuminate\Http\Request;    
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;

Route::get('/', function () {
    return view('welcome');

});

/**starter */
 Route::get('users',function(){
    $users = User::all()->toArray();
     return view('starter', ['users' => $users]);
 })->name('users.index');

/**post */
//  Route::get('post',function(){
//     $posts = factory(Post::class,10)
//     ->make()
//     ->toArray();
//     return view('post', ['posts' => $posts]);
// });
  
/** view-create*/
Route::view('users/create','users/create')->name('users.create');
/**view-update */
Route::view('users/update','users/update')->name('users.update');



/** create-store */
Route::post('users/store',function(Request $request){
  //dd($request->all());
  $data = $request->all();
    $user = User::create([
        'name' =>$data['name'],
        'email' => $data['email'],
        'birthday' =>$data['birthday'],
        'password'=>bcrypt('123456'),
      
    ]);
    return redirect()->route('users.index');

})->name('users.store');
/**----------------------------------------------------------------------- */





/**read */
Route::get('users/{id}', function ($id) {
    $user= User::find($id);
})->name('users.show');


/**---------------------------------------------------------------------------------------*/
/**Update */

Route::post('users/update/{id}', function($id){
    $user = User::find($id);
    $user->update([
        'name' => 'NTQ',
    ]);
    return redirect()->route('users.index');
});

/**----------------------------------------------------------------------------------------- */


/**delete */
Route::get('users/delete/{id}', function($id){
    
    $user = User::find($id);
    $user->delete();
    
        return redirect()->route('users.index');
})->name('users.delete');


/**-------------------------------------------------- */
Route::get('post', function () {
        $posts = \App\Models\Post::all();
        foreach ($posts as $key => $post) {
            $post->user;
        }
        return view('post', [
                    'posts' => $posts->toArray()
                ]);
    });

