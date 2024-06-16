<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $permissions = Permission::all();
       $title = "Permissions";
    //    $classname =
       return view('backend.permissions.index', compact('permissions', 'title'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:6|unique:permissions,name,except,id',
            'guard' => 'required|string',
        ]);

        $actions = [
            'create' => 1,
            'read' => 1,
            'update' => 1,
            'delete' => 1
        ];

        if ($request->name) {
            $stack = explode('_', $request->name);
            if(!class_exists('\\App\\Models\\'.$stack[0])){
                return redirect()->back()->with('error', "Error: The model {$stack[0]} does not exist!");
            }

            if (!key_exists($stack[1], $actions)) {
                return redirect()->back()->with('error', "Error: The action {$stack[1]} is invalid!");
            }
        }

        try {
            $permission = new Permission();

            $permission->name = $request->name;
            $permission->guard_name = $request->guard;

            $permission->save();

            return redirect()->route('admin.permissions.index')->with('status', 'Permission added Successful!');
        } catch (\Exception $e) {
            Log::error("Error on add new permission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Error: '.$e->getMessage());
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::where('id', '=', $id)->firstOrFail();
        $title = str_replace('_', ' ', $permission->name);
        return view('backend.permissions.edit', compact('permission', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $permission = Permission::findOrFail($id);
            $permission->delete();

            return redirect()->back()->with('status', 'Permission deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Permission: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error deleting this permission. Please try again.');
        }
    }
}