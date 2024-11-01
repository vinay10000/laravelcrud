<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
    public function login(Request $request)
    {
        $incommingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        if(auth()->attempt(["name" => $incommingFields['loginname'], "password" => $incommingFields['loginpassword']])){
            $request->session()->regenerate();
            
        }
        return redirect('/');
    }
    public function register(Request $request)
    {
        $incommingFields = $request->validate([
            'name' => ['required', 'string','min:3', 'max:25',Rule :: unique('users', 'name')],
            'email' => ['required','email',Rule :: unique('users', 'email')],
            'password' => 'required'
        ]);
        $incommingFields['password'] = bcrypt($incommingFields['password']);
        $user= User::create($incommingFields);
        auth()->login($user);

        return redirect('/');
    }
}
