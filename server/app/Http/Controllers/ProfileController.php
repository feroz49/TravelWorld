<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Show Profile
    public function show($id)
    {
        $user = User::findOrFail($id); // TourGuide::findOrFail($id) যদি tour guide হয়
        return view('profile', compact('user'));
    }

    // Edit Profile (optional)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile-edit', compact('user'));
    }

    // Update Profile (optional)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('profile.show', $id)->with('success', 'Profile updated successfully!');
    }
}