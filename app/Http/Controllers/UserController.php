<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $request->validate(
            [
            'name' => 'required|string|min:8|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|min:10|max:15'
            ]
        );

        $user = User::create(
            [
            'id' => Str::uuid()->toString(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'role' => "USER",
            ]
        );

        return response()->json($user);
    }

    public function login(Request $request)
    {
        $cred = $request->validate(
            [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
            ]
        );

        if (Auth::attempt($cred)) {
            return redirect()->intended('login');
        }
        return redirect()->intended('register');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
