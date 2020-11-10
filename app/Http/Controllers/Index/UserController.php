<?php

namespace App\Http\Controllers\Index;
use App\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $code = $request->input('code');

    }
}
