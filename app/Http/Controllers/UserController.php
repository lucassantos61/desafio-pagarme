<?php

namespace fantasias\Http\Controllers;

use fantasias\User;
use Request;
use Illuminate\Support\Facades\Auth;
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

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin()
    {
        $credenciais = Request::only('email','password');

        if(Auth::attempt($credenciais)) {
            return view('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile()
    {
        return view('user.profile');
    }
}
