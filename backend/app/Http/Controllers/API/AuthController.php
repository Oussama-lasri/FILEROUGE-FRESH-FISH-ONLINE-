<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'role' => '',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);


        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->error(),
            ];
            return response()->json($response, 400);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $data = User::find($user->id);
        // dd($data);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $data->firstName.' '.$data->lastName;
        $success['role'] = $data->role;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => "User register successfully",
        ];
        return response()->json($response, 200);
    }

    public function login(Request $request)
    {
        // return response()->json(Auth::attempt(['email'=>$request->email,'password'=>$request->password]));
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //$user = Auth::user();
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['role'] = $user->role;
            $success['name'] = $user->firstName.' '.$user->lastName;

            $response = [
                'success' => true,
                'data' => $success,
                'message' => "User login successfully",
            ];
            return response()->json($response, 200);
        } else {
            $response = [
                'success' => false,
                'message' => 'email or password not correct'
            ];
            return response()->json($response);
        }
    }
}
