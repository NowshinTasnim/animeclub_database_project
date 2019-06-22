<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
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

    public function anime_show()
    {
        $number_of_anime =
        DB:: table('animes')
        ->distinct('anm_name')
        -> count('anm_name');

        $data = DB::select("SELECT * 
          FROM animes
          LEFT JOIN members ON members.member_id = animes.member_id
          LEFT JOIN clubs ON clubs.club_id = animes.club_id 
          LEFT JOIN genres ON genres.genre_id = animes.genre_id
          ORDER BY anm_name 
         ");

        return view('anime.show',['num_anime' => $number_of_anime, 'data' => $data]);
    }

    public function member_show()
    {
        $number_of_member =
        DB:: table('members')
        ->distinct('email')
        -> count('email');

        $data = DB::select("SELECT m.member_id, m.member_name, m.email, m.password, m.admin, cl.club_name, ct.city_name, jobtype.type_name 
          FROM members as m
          LEFT JOIN clubs as cl ON cl.club_id = m.club_id 
          LEFT JOIN cities as ct ON ct.city_id = m.city_id 
          LEFT JOIN (SELECT jb.* ,jt.type_name 
          FROM jobs as jb
          LEFT JOIN j_types as jt
          ON jt.type_id = jb.type_id) as jobtype
          ON jobtype.member_id = m.member_id
          ORDER BY m.member_id
         ");

        return view('member.show',['num_member' => $number_of_member, 'data' => $data]);
    }

    public function city_show()
    {
        $number_of_city =
        DB:: table('cities')
        ->distinct('city_name')
        -> count('city_name');

        $data = DB::select("SELECT * FROM cities order by city_id
         ");

        return view('city.show',['num_city' => $number_of_city, 'data' => $data]);
    }

    public function club_show()
    {
        $number_of_club =
        DB:: table('clubs')
        ->distinct('club_name')
        -> count('club_name');

        $data = DB::select("SELECT * FROM clubs order by club_id
         ");

        return view('club.show',['num_club' => $number_of_club, 'data' => $data]);
    }

    public function genre_show()
    {
        $number_of_genre =
        DB:: table('genres')
        ->distinct('genre_name')
        -> count('genre_name');

        $data = DB::select("SELECT * FROM genres order by genre_id
         ");

        return view('genre.show',['num_genre' => $number_of_genre, 'data' => $data]);
    }

    public function job_show()
    {
        $number_of_job =
        DB:: table('jobs')
        ->distinct('job_id')
        -> count('job_id');

        $data = DB::select("SELECT * 
          FROM jobs
          LEFT JOIN members ON members.member_id = jobs.member_id
          LEFT JOIN j_types ON j_types.type_id = jobs.type_id  
         ");

        return view('job.show',['num_job' => $number_of_job, 'data' => $data]);
    }

    public function jtype_show()
    {
        $number_of_type =
        DB:: table('j_types')
        ->distinct('type_name')
        -> count('type_name');

        $data = DB::select("SELECT * FROM j_types order by type_id
         ");

        return view('jtype.show',['num_type' => $number_of_type, 'data' => $data]);
    }
}
