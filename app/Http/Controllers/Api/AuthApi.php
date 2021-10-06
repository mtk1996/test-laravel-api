<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthApi extends Controller
{
    public function login(Request $request)
    {
        //valida


        //vali succes
        $user = User::find(1);
        return $user->createToken('user')->accessToken;
    }
}
