<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // function index(Request $request){
    //     return $request->name ;
    // }
    function edit(){
        return 'hello from controller (edit)';
    }
    function index(){
        return view('services');
    }
    function show(){
        return 'show';
    }
    function update(){
        return 'update';
    }
    function create(){
        return 'create';
    }
    function store(){
        return 'store';
    }
    function destroy(){
        return 'destroy';
    }
   
}
