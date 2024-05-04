<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
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
        $insert = new Permission;
        $insert->create($data);
        $permissions = Permission::all();
        return redirect('permissions')->with(compact('permissions'))->with('success', 'Permission Added Successfully');
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
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission','roles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {

        $data = $request->validate([
            'name' => 'required|max:255'
        ]);
        $permission->update($data);
        $permissions = Permission::all();
        return redirect('permissions')->with(compact('permissions'))->with('success', 'Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        $permissions = Permission::all();
        return redirect('permissions')->with(compact('permissions'))->with('danger', 'Permissions Deleted successfully');
    }

    public function assignRole(Request $request, Permission $permission){
        if($permission->hasRole($request->role)){
            return back()->with('success','Role exists');
        }
        $permission->assignRole($request->role);
        return back()->with('success','Permission exists');
    }

    public function removeRole(Permission $permission, Role $role){
       if($permission->hasRole($role)){
        $permission->removeROle($role);
        return back()->with('danger','Role removed');
       }
       return back()->with('warning','Role does not exist');

    }

}
