<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->except(['permissions', '_token']));

        if($request->permissions){
            foreach ($request->permissions as $key=>$value) {
                $role->attachPermission($value);
            }
        }
        
        return redirect()->route('roles.index');
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
        $role = Role::find($id);

        if($role->name!='user' AND $role->name!='admin'){
            $permissions = Permission::all();
            $role_permission = $role->perms()->pluck('id', 'id')->toArray();

            return view('roles.edit', compact('role', 'permissions', 'role_permission'));
        } else {
            return 'You can not edit this role.';
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
        $role = Role::find($id);

        $this->validate($request, [
            'name' => 'required'
        ]);

        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        DB::table('permission_role')->where('role_id', $id)->delete();

        if($request->permissions){
            foreach ($request->permissions as $key=>$value) {
                $role->attachPermission($value);
            }
        }

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id', $id)->delete();
        return back();
    }
}
