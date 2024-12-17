<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'agreement' => ['accepted'],
            'profile_picture' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('profile_picture')) {
            $imageName = time() . '.' . $request->profile_picture->extension();  
            Storage::disk('public')->put($imageName, file_get_contents($request->file('profile_picture')));
            $attributes['profile_picture'] = $imageName;
        }

        $attributes['password'] = bcrypt($attributes['password']);
        $attributes['role'] = 'guest'; // Set default role to guest

        $user = User::create($attributes);

        Auth::login($user);

        session()->flash('success', 'Account created successfully.');
        return redirect('/dashboard');
    }
}
