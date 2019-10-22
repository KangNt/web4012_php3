<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->posts;
        }
        $users->toArray();
        return view('admin.users.index', ['users' => $users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'phone'=>$data['phone'],
            'email' => $data['email'],
            'birthday' => $data['birthday'],
            'role'=>$data['role'],
            'is_active'=>$data['is_active'],
            'password' => bcrypt('123456'),
        ]);
     
    
        return redirect()->route('users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
        // return view('admin.users.show', ['user' => User::findOrFail($id)]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user=User::find($id);
        // return view ('users.edit',['user'=>$user->toArray()]);

        $user = User::find($id);
        return view('admin.users.edit', [
            'user' => $user,
        ]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // $data = $request->all();

        $user->update([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'phone' =>$request->phone,
            'role' => $request->role,
        ]);
    
        return redirect()->route('admin.users.index');


        // $user = User::where('id', '=', $id)->first();

        // $user->update($request->all());

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}