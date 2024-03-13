<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        try{
            
            $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);
            $data = [
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ];
            User::create($data);
            return response()->json(['message' => 'User created successfully','status' => 'success'], 200);
        }catch (Exception $exception){
            return response()->json(['message' => $exception->getMessage(),'status' => 'error'], 200);
        }
    }
    public function login(Request $request){
        try{
            $request->validate([
                'email' => 'required|email',
            ]);
            $user = User::where('email', '=', $request->input('email'))->first();
            if(!$user || !Hash::check($request->input('password'), $user->password)){
               // return response()->json(['message' => 'Invalid email or password','status' => 'error'], 200)->redirect('/admin/dashboard');
              return redirect('/admin/dashboard')->with(['message' => 'Invalid email or password','status' => 'error'], 200);  
            }
            $token = $user->createToken('auth_token')->plainTextToken;
            //return response()->json(['message' => 'User logged in successfully','status' => 'success',"token"=>$token], 200);
            return redirect('/admin/dashboard')->with(['message' => 'User logged in successfully','status' => 'success'], 200);  
        }catch (Exception $exception){
            return response()->json(['message' => $exception->getMessage(),'status' => 'error'], 200);
        }
    }
    public function user_login(){
        return view('admin.login');
    }
    public function user_register(){
        return view('admin.register');
    }

    public function profile(){
        return "Profile";
    }
    public function index(){
        return view('admin.index');
       // return "admin";
    } 
    public function logout(Request $request){
        //dd(Auth::user());
        //$request->user()->tokens()->delete();
        return redirect('/user-login')->with(['message' => 'User logged out successfully','status' => 'success'], 200);
        
    }
}
