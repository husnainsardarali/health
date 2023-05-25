<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Function for login the User    
    public function login(Request $request){   
        $validator = Validator::make($request->all(), [
            'email'=>'required|email|max:255',
            'password'=>'required|max:8|min:8',
        ]);    
        // Check validation failure
        if ($validator->fails()) {
            return response(['message'=>[$validator->errors()]],404);
        }
        $user= User::where('email',$request->email)->first();
        if(!$user){
            return response(['message'=>['Use your email']],404);
        }
        if(!Hash::check($request->password,$user->password)){
            return response(['message'=>['Kindly use the correct password']],404);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response, 201);
    }

    // Function for Logout the User
    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'user logged out'
        ];
    }
    public function check(){
        return "Yes";
    }
    // function for register the user
    public function register(Request $request){
        // 
        $validator = Validator::make($request->all(),[
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            // 'dob'  => 'required|date',
            'dob'  => 'required|date|date_format:Y-m-d',
            'password' => 'required|string|confirmed'
        ]);    
        // Check validation failure
        if ($validator->fails()) {
            return response(['message'=>[$validator->errors()]],404);
        }
        $user = User::create([
            'name' => $request->fname." ".$request->lname,
            'email' => $request->email,
            'dob' => $request->dob,
            'password' => Hash::make($request->password),            
        ]);
        $token = $user->createToken('apiToken')->plainTextToken;
        $res = [
            'message'=>'Registered Successfuly',
            'user' => $user,
            'token' => $token
        ];
        return response($res, 201);
    }
}
