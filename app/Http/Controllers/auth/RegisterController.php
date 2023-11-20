<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistrationFromRequest;

class RegisterController extends Controller
{
    /**
     * Show User Register page
     */
   public function showRegisterPage()
   {
    return view('auth.user_register');

    }

    /**
     * Mechanism of user registration
     */
    public function register(RegistrationFromRequest $request)
    {
        $request->validated();
        User::create([
            'id'       => Str::uuid(),
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back();
    }
}
