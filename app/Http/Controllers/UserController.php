<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SignupRequest;

class UserController extends Controller
{
    public function signup(SignupRequest $request)
    {
        User::create($request->all());
        return response()->json($request);
        /*$user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),

        ]);
        $user->save();
        return response()->json([
            'message' => 'successfully created user'
        ], 201);*/
    }
}
