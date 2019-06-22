<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //Validate the form
        $this-> validate( $request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        //Attempt to log the user in
        if(isset($_POST['email']) && isset ($_POST['password']))
        {
            $email = $_POST['email'];
            $pass = trim($_POST['password']);

            $sql = DB::select( "SELECT * FROM members WHERE (email = ? AND password = ?) LIMIT 1",[$email,$pass]);

            if(count($sql) == 1)
            {
                $logged = 'true';
                Session::put('email',$email);
                Session::put('logged_in',$logged);
                return $this->show();
            }

        }
        return view('auth.login')->withInput($request->only('email'));
    }

    public function show()
    {
        $email = Session::get('email');
        $best="";

        $workdata = DB:: SELECT("SELECT * from animes natural join genres
        where member_id = (SELECT member_id from members where email = ?) ORDER BY anm_name",[$email]);

        $mem_id=collect($workdata)->first()->member_id;

        $bestworker = collect(DB:: SELECT("
                SELECT member_id,max(cnt_anime) from member_works 
                GROUP BY member_id
            "))->first()->member_id;

        if($mem_id == $bestworker)
        {
            $best= collect(DB::SELECT("SELECT topworker() AS topworker;"))->first()->topworker;
        }

        return view('my_work',['workdata' => $workdata, 'best' => $best]);
    }
    public function logout()
    {
        Session::flush();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
}
