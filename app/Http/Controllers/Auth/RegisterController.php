<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\userService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{

    public function __construct(private UserService $userService){}
    //
    public function index(){
        return view('inscription.register');
    }
    public function register(Request $request){
        $request->validate([
             'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'newsletter' => ['nullable', 'boolean']
        ]);
        $user=$this->userService->createUser($request->all());
        Auth::login($user);
        return redirect()->route('loginForm');
    }
}
