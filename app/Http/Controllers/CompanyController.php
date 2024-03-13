<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index(){
        return view('companies.index');
    }
    public function index2(){
        return company::get();
    }
    public function show(Request $request){
        return company::find($request->id);
    }
    public function store(Request $request){
        return company::create($request->all());
    }
    public function update(Request $request){
        return company::find($request->id)->update($request->all());
    }
    public function destroy(Request $request){
        return company::find($request->id)->delete();
    }
}
