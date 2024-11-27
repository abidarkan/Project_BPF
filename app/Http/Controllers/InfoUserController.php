<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class InfoUserController extends Controller
{
    public function create()
    {
        return view('laravel-examples/user-profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        //$user->save();

        return back()->with('success', 'Profile updated successfully!');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name'      => ['required', 'max:50'],
            'email'     => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::id())],
            'phone'     => ['nullable', 'max:50'],
            'location'  => ['nullable', 'max:70'],
            'about_me'  => ['nullable', 'max:150'],
        ]);

        if (env('IS_DEMO') && Auth::id() == 1 && $request->email != Auth::user()->email) {
            return redirect()->back()->withErrors([
                'msg2' => 'You are in a demo version, you cannot change the email address.',
            ]);
        }

        User::where('id', Auth::id())->update($attributes);

        return redirect('/user-profile')->with('success', 'Profile updated successfully.');
    }
}
