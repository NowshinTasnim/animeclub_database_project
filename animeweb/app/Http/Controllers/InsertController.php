<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
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
    public function showAnimeForm()
    {
        return view('anime.insert');
    }

    public function showMemberForm()
    {
        return view('member.insert');
    }

    public function showCityForm()
    {
        return view('city.insert');
    }

    public function showClubForm()
    {
        return view('club.insert');
    }

    public function showGenreForm()
    {
        return view('genre.insert');
    }

    public function showJobForm()
    {
        return view('job.insert');
    }

    public function showJtypeForm()
    {
        return view('jtype.insert');
    }

    public function anime_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['anm_name']) &&
            isset($_POST['rls_date']) &&
            isset($_POST['cl_id']) &&
            isset($_POST['g_id']) &&
            isset($_POST['m_id']) 
            ){
                $name = trim($_POST['anm_name']);
                $date = $_POST['rls_date'];
                $club = $_POST['cl_id']; ;
                $genre = $_POST['g_id'];
                $member = $_POST['m_id'];

                DB::Insert("Insert into animes(anm_name, release_date, club_id, genre_id, member_id) VALUES(?,?,?,?,?)",[$name, $date, $club, $genre, $member]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";

                DB::commit();
                return view('anime.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function member_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['m_name']) &&
                isset($_POST['email']) &&
                isset($_POST['cl_id']) &&
                isset($_POST['ct_id']) &&
                isset($_POST['pass']) &&
                isset($_POST['admin']) 
            ){
                $name = trim($_POST['m_name']);
                $email = trim($_POST['email']);
                $club = $_POST['cl_id']; ;
                $city = $_POST['ct_id'];
                $pass = trim($_POST['pass']);
                $admin = trim($_POST['admin']);

                DB::Insert("Insert into members(member_name, email, password, admin, city_id, club_id) VALUES(?,?,?,?,?,?)",[$name, $email, $pass, $admin, $city, $club]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('member.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function city_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['ct_name']) ){
                $name = trim($_POST['ct_name']);

                DB::Insert("Insert into cities(city_name) VALUES(?)",[$name]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('city.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function club_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['cl_name']) ){
                $name = trim($_POST['cl_name']);

                DB::Insert("Insert into clubs(club_name) VALUES(?)",[$name]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('club.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function genre_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['g_name']) ){
                $name = trim($_POST['g_name']);

                DB::Insert("Insert into genres(genre_name) VALUES(?)",[$name]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('genre.insert');
            }
        }

        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function job_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['m_id']) &&
                isset($_POST['type_id'])
             ){
                $member = $_POST['m_id'];
                $type =$_POST['type_id'];

                DB::Insert("Insert into jobs(member_id,type_id) VALUES(?,?)",[$member, $type]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('job.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function jtype_insert()
    {
        DB::beginTransaction();
        try{
            if(isset($_POST['jt_name']) ){
                $name = trim($_POST['jt_name']);

                DB::Insert("Insert into j_types(type_name) VALUES(?)",[$name]);

                echo "
                    <script type='text/javascript'>
                        alert('Succesfully inserted!!');
                    </script>
                ";
                return view('jtype.insert');
            }
        }
        catch(\Excaption $e)
        {
            DB::rollback();
            return $e->getMessage();
        }
    }
}
