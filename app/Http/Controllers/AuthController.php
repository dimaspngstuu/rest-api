<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //

    public function register(Request $request){
        $input = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];

        $user = User::create($input);

        $data = [
            "message" => "register succesfully"
        ];

        return response()->json($data,200);
    }

    public function login(Request $request){

        $input = [
          'email'=>$request->email,
          'password'=>$request->password  
        ];


        $user = User::where('email',$input['email'])->first();
        if($input['email'] == $user->email && Hash::check($input['password'],$user->password)){
            $token = $user->createtoken('authToken');

            $data = [
                "message" => "Login is succes",
                "token" => $token->plainTextToken
            ];


            return response()->json($data,200);

        }else {
            $data = [
                "message"=>"login is failed"
            ];

            return response()->json($data,401);
        }
    }
}
