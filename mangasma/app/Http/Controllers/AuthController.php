<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'password_check' => ['required_with:password', 'same:password'],
        ]);

        $users = user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => 'user',
        ]);

        Auth::login($users);

        return redirect('catalogue.php');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('catalogue.php');
    }

    public function login(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Auth::attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        return redirect('catalogue.php');
    }
}
