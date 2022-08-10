<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::orderBy('name')->where('name', '!=', 'admin')->get();;

        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::orderBy('name')->get();
        return view('admin.role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'permissions.*' => 'required|integer|exists:permissions,id',
        ]);

        $newRole = Role::create([
            'name' => $request->name,
        ]);

        $permissions = Permission::whereIn('id', $request->permissions)->get();

        $newRole->syncPermissions($permissions);

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');

    }


//    public function show(Role $role)
//    {
//        //
//    }

    public function edit(Role $role)
    {
        $permissions = Permission::orderBy('name')->get();


        return view('admin.role.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|max:255',
            'permissions' => 'required',
            'permissions.*' => 'required|integer|exists:permissions,id',
        ]);

        $role = Role::where('name', '!=', 'admin')->findOrFail($role->id);

        $role->update([
            'name' => $request->name
        ]);
        $permissions = Permission::whereIn('id', $request->permissions)->get();

        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');
    }


    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
            ->with('success','Role deleted successfully');
    }
}
