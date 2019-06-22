<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
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
    public function show_home()
    {
        $data = DB::select("SELECT *  
            from animes, members,genres
            where animes.member_id = members.member_id
            and animes.genre_id = genres.genre_id
            order by release_date DESC,anm_name LIMIT 5");
        
        $memdata = DB::Select("SELECT m.member_name, m.member_id, count(a.anm_id) as cnt_anime 
            from animes as a RIGHT JOIN members as m
            ON a.member_id = m.member_id
            GROUP BY m.member_id, m.member_name
            Order BY cnt_anime DESC,member_name LIMIT 5");


        $clubdata = DB::Select("SELECT c.club_name, c.club_id, count(m.member_id) as cnt_mem 
            from clubs as c left JOIN members as m
            ON c.club_id = m.club_id
            GROUP BY c.club_id, c.club_name
            Order BY club_name");

        $typedata = DB::Select("SELECT jt.type_name, jt.type_id, count(jb.member_id) as cnt_mem 
            from j_types as jt left JOIN jobs as jb
            ON jt.type_id = jb.type_id
            GROUP BY jt.type_id, jt.type_name
            Order BY type_name");

        $clubid = DB::SELECT("(SELECT club_id from clubs) UNION (SELECT club_id from members)
        ");

        $blankcitydata = DB::SELECT("SELECT * from cities where city_id IN(SELECT city_id from cities) AND city_id NOT IN (select city_id from members) ");
        
        $actionanime = DB::table('animes')->select('*')->
        where('genre_id','=','2')->cursor();

        $horroranime = DB::table('animes')->select('*')->
        where('genre_id','=','1')->cursor();

        return view('welcome',
            ['data' => $data, 'memdata' => $memdata, 'clubdata' => $clubdata, 'typedata' => $typedata, 'clubid' => $clubid, 'acanm' => $actionanime, 'hranm' => $horroranime, 'blankcitydata' => $blankcitydata ]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
