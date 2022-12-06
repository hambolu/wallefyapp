<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request){
        //dd($request->all());

       $v = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'entity' => 'required',
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'entity' => $request->entity,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(10),
        ]);


        //dd($user);
        // auth()->login($user);

        // return redirect('/profile');
        return redirect('/')->with('success','Registeration Successfully!');
    }


}
