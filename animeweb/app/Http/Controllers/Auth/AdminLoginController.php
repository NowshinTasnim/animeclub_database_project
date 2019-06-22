<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//Validate the form
    	$this-> validate( $request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	//Attempt to log the user in
        if(isset($_POST['email']) && isset ($_POST['password']))
        {
            $email = $_POST['email'];
            $pass = trim($_POST['password']);
            $check_admin ="yes";

            $sql = DB::select( "SELECT * FROM members WHERE (email = ? AND password = ? AND admin = ?) LIMIT 1",[$email,$pass,$check_admin]);
            
            if(count($sql) == 1)
            {
                $logged = 'true';
                Session::put('email',$email);
                Session::put('logged_in',$logged);
                return view('admin');
            }

        }
    	//if unsuccessful

    	return view ('auth.admin-login')->withInput($request->only('email'));
    }

    public function logout()
    {
        Session::flush();
    }
}
