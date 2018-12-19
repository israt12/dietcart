<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
     
    	return view('admin.index');

    }

     public function verify(Request $request)
    {
    	

        $u = DB::table('register') 
            ->where('userName', $request->username)
            ->where('password', $request->password)
            ->where('type', '=', 'admin')
            ->first();
            

    	if(!$u)
    	{
            $request->session()->flash('message', 'Invalid Admin or password');
    		return redirect('/admin');
    	}
    	else
    	{
               
            $request->session()->put('admin', $u);
    		return redirect('/product');
    		
    	}
    }
}
