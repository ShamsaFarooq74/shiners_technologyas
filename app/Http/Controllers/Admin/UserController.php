<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

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
        $user_count=User::count();
        return view('admin.users.index', compact('users','user_count'));
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

        $data=$request->validate([
          'name'=>['required','max:255','min:3'],
          'email'=>['required','unique:users','max:255','email'],
          'password'=>['required','min:7','max:255']

        ]);
        $data['password']=bcrypt($request->password);
        User::create($data);
        return redirect()->route('users.index')->with('success','User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);
        $user['name'] = $data['name'];
        $user->update();
        $users = User::all();

        return redirect('users.index')->with(compact('users'))->with('success', 'User Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User Deleted Successfully');
    }

    public function assignRolePage(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignUserRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('success', 'Role exists');
        }
        $user->assignRole($request->role);
        return back()->with('success', 'Role assigned');
    }


    public function removeUserRole(User $user, Role $role)
    {

        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('danger', 'Role removed');
        }
        return back()->with('warning', 'Role does not exist');
    }
    public function assignUserPermission(Request $request, User $user)
    {

        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('warning', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('success', 'Permission added');
    }

    public function removeUserPermission(User $user, Permission $permission){

        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return back()->with('success','Permission Revoked');
        }
        return back()->with('danger','Permission not exists');
    }
}
