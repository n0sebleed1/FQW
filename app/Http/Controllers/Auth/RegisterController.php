<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
        try {
            $user = User::create([
                'login' => $request->login,
                'password' => $request->password,
                'name' => $request->name,
                'surname' => $request->surname
            ]);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
