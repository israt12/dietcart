<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function index($id)
    {
    	$user = DB::table('register')
    		->where('userName', $username)
    		->first();
    	return view('user.index')
    		->with('user', $user);
    }


    // public function show($id)
    // {
    // 	$u = DB::table('user')
    // 		->where('id', $id)
    // 		->first();
    // 	return view('user.index')
    // 		->with('user', $u);
    // }
}
