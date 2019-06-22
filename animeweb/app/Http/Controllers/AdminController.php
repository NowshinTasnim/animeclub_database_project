<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Session::get('logged_in')){
            return view('admin');
        }
        else{
            return view('auth.admin-login');
        }
    }

    
}
