<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin')->except(['edit', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $avatars = Avatar::all();
        return view('users.index', compact('users', 'avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $avatars = Avatar::all()->where('name', '!=', 'crown');
        
        if(!$user->hasRole('admin')){
            $roles = Role::all()->where('name', '!=', 'admin');
            $role_user = $user->roles()->pluck('id', 'id')->toArray();

            return view('users.edit', compact('user', 'roles', 'role_user', 'avatars'));
        } else {
            return 'You can not edit this user.';
        }
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

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user->name = $request->name;
        $user->avatar_id = $request->avatar;
        $user->save();

        if($request->roles){
            DB::table('role_user')->where('user_id', $id)->delete();
            foreach ($request->roles as $key=>$value) {
                $user->attachRole($value);
            }
        }
        if($user->hasRole('admin')){
            return redirect()->route('users.index');
        } else {
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back();
    }
}
