<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){

    }
    public function show(){
        
    }
    public function store(Request $request){
       
        return Profile::create($request->all());
        
    }
}
