<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles =Role::whereNotIn('name',['admin'])->get();// Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $insert = new Role;
        $insert->create($data);
        $roles = Role::all();
        return redirect('roles')->with(compact('roles'))->with('success', 'Role Added Successfully');
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
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);
        $role->update($data);
        $roles = Role::all();
        return redirect('roles')->with(compact('roles'))->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        $roles = Role::all();
        return redirect('roles')->with(compact('roles'))->with('danger', 'Role Deleted successfully');
    }

    public function givePermission(Request $request,Role $role){

        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','Permission exists.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message','Permission added');

    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){

            $role->revokePermissionTo($permission);
            return back()->with('success','Permission Revoked');
        }
        return back()->with('danger','Permission not exists');
    }
}
