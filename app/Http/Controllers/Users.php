<?php

namespace App\Http\Controllers;

use App\Helper\UserService;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function register(Request $request){
        // $response=(new UserService($request->email,$request->password))->register($request->deviceName);
        // return response()->json($response);
        return "hello world";
    }
    public function login(Request $request){

    }
}
