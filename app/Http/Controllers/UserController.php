<?php

namespace fantasias\Http\Controllers;

use fantasias\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use fantasias\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(UserRequest $request)
    {
        $user = $request->all();
		$user['password'] = Hash::make($user['password']);
        User::create($user);
        
        return redirect()->route('produto.index');
    }
}
