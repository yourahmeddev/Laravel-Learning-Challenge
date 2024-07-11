<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //index method to open view file
    // public function index(){
    //     return view('user');
    // }
    public function show($id){
        return view('user' , compact('id'));
    }
}
