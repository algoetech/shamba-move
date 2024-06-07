<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $title = "Users";
        $roles = Role::all();
        return view('backend.users.index', compact('users', 'title', 'roles'));
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
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'bio' => 'nullable|string',
            'role' => 'required|exists:roles,id',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // return $request;

        try {
            // Handle profile picture upload
            if ($request->hasFile('profile_picture')) {
                $originalFilename = $request->file('profile_picture')->getClientOriginalName();
                $timestamp = now()->timestamp;
                $uniqueFilename = $timestamp . '-' . Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '.' . $request->file('profile_picture')->getClientOriginalExtension();
                $profilePicturePath = $request->file('profile_picture')->storeAs('images/profiler', $uniqueFilename, 'public');
            } else {
                $profilePicturePath = null;
            }

            // Create the user
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'bio' => $request->input('bio'),
                'role_id' => $request->input('role'),
                'profile_picture' => "storage/".$profilePicturePath,
            ]);
            // Redirect to a specific route with a success message
            return redirect()->route('admin.users.index')->with('status', 'User added successful!');

        } catch (\Exception $th) {
            // return $th->getMessage();
            return redirect()->route('admin.users.index')->with('error', $th->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        // return $user;
        $title = "Edit : $user->name";
        $roles = Role::all();
        return view('backend.users.edit', compact('user', 'title', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|exists:roles,id',
            'bio' => 'nullable|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            // Find the user by ID
            $user = User::findOrFail($id);

            // Update user's details
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = $request->role;
            $user->bio = $request->bio;


            if ($request->hasFile('profile_picture')) {
                // Delete the old profile picture if it exists
                if ($user->profile_picture) {
                    Storage::disk('public')->delete($user->profile_picture);
                }


                $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
                $user->profile_picture = $profilePicturePath;
            }

            // Save the updated user details
            $user->update();

            // Redirect to a specific route with a success message
            return redirect()->route('admin.users.index')->with('status', 'User updated successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error updating user: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'There was an error updating the user. Please try again.')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $user->delete();

            return redirect()->route('admin.users.index')->with('status', 'User deleted successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error deleting user: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->route('admin.users.index')->with('error', 'There was an error deleting the user. Please try again.');
        }
    }
}
