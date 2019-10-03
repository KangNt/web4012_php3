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
    //  $users = factory(User::class,10)
    //  ->make()
    //  ->toArray();
    $users = User::all()->toArray();
     return view('starter', ['users' => $users]);
 })->name('users.index');

// /**post */
//  Route::get('post',function(){
//     $posts = factory(Post::class,10)
//     ->make()
//     ->toArray();
//     return view('post', ['posts' => $posts]);
// });
  
/** create*/

Route::view('users/create','users/create')->name('users.create');

/** store */
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

/**read */
Route::get('users/{id}', function ($id) {
    $user= User::find($id);
})->name('users.show');



/**Update */
Route::get('users/update/{id}', function( $id){
    //....
    $user = User::find($id);
    $user->name ='QuangNt99';
    $user->email= 'oda.mante@example.com';
    $user->save();
   
    $user->update([
        'name'=>'Noooooo',
        'email'=>"kangnguyen260399@gmail.com",
    ]);
        return redirect()->route('users.index');
});

/**delete */
Route::get('users/delete/{id}', function($id){
    //....
    $user = User::find($id);
    $user->delete();

        return redirect()->route('users.index');
});



