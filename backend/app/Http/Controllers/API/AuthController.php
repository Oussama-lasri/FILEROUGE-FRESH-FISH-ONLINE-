<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (Request $request){
        $validator = Validator::make($request->all(),[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->error(),
            ];
            return response()->json($response,400);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => "User register successfully",
        ];
        return response()->json($response,200);

    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            //$user = Auth::user();
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
    
            $response = [
                'success' => true,
                'data' => $success,
                'message' => "User register successfully",
            ];
            return response()->json($response,200);
        }
    }
}
