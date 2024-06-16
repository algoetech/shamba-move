<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->hasAccess('Role_read');
        $roles = Role::all();
        $title = "Roles";
        $permissions = Permission::all();
        // return $permissions;
        return view('backend.roles.index', compact('roles', 'title', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'name' => 'required|string|min:4',
            'guard'=> 'required',
        ]);

        try {
            $role = new Role();

            $role->name = $request->name;
            $role->guard_name = $request->guard;

            $role->save();
            return redirect()->route('admin.roles.index')->with('status', 'Role added successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating user: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error updating the Post Category. Please try again.')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }



    public function closure(Request $request, string $role_id)
    {
        try {
            // return Hashids::decode($role_id);
            $decodedRoleId = $role_id;
            if (empty($decodedRoleId)) {
                return redirect()->back()->with('error', 'Invalid Role ID.');
            }

            $role = Role::findOrFail($decodedRoleId[0]);
            $permissions = $request->input('permissions', []);

            // Ensure permissions are valid IDs
            $validPermissions = Permission::whereIn('id', $permissions)->pluck('id')->toArray();

            // Sync the permissions to the role
            $role->syncPermissions($validPermissions);

            return redirect()->back()->with('status', 'Permissions assigned successfully.');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'Failed to assign permissions: ' . $th->getMessage());
        }
    }
}