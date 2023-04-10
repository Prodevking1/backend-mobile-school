<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{

    public function register(Request $request)
    {
        /* $UserExists = User::find('email', $request->email);
        if ($UserExists) {
        return response()->json(["Error" => "User already exists"], 401);
        } else {
        $user = User::create(
        [
        "name" => $request->name,
        "email" => $request->email,
        "password" => Hash::make($request->password)
        ]
        );
        if ($user) {
        return response()->json(["success" => "User created"], 201);
        }
        } */
        $user = User::create(
            [
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]
        );
        if ($user) {
            return response()->json(["success" => "User created"], 201);
        } else {
            return response()->json(["Error" => "User already exists"], 401);

        }

    }

    public function login(Request $request)
    {
        /* $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|password',
        ]);
        if ($validator->fails()) {
        throw new ValidationException($validator);
        } */

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['message' => "Login sucessful"], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

}