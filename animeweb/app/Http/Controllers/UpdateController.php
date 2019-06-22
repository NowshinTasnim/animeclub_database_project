<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
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
        return view('anime.update');
    }

    public function showMemberForm()
    {
        return view('member.update');
    }

    public function showCityForm()
    {
        return view('city.update');
    }

    public function showClubForm()
    {
        return view('club.update');
    }

    public function showGenreForm()
    {
        return view('genre.update');
    }

    public function showJobForm()
    {
        return view('job.update');
    }

    public function showJtypeForm()
    {
        return view('jtype.update');
    }

    public function anime_update()
    {
        if(isset($_POST['col_opt']) &&
            isset($_POST['val1']) &&
            isset($_POST['where_opt']) &&
            isset($_POST['val2']) 
        ){
            $col_name = $_POST['col_opt'];
            $nvalue = $_POST['val1'];
            $cond = $_POST['where_opt'];
            $condval = $_POST['val2'];

            DB::update("UPDATE animes SET ".$col_name." = ? Where ".$cond." = ?",
              [$nvalue, $condval]);  

            echo "
                <script type='text/javascript'>
                  alert('Succesfully updated!!');
                </script>
            ";
            return view('anime.update');
        }
    }

    public function member_update()
    {
        if(isset($_POST['col_opt']) &&
            isset($_POST['val1']) &&
            isset($_POST['where_opt']) &&
            isset($_POST['val2']) 
        ){
            $col_name = $_POST['col_opt'];
            $nvalue = $_POST['val1'];
            $cond = $_POST['where_opt'];
            $condval = $_POST['val2'];
            
            DB::update("UPDATE members SET ".$col_name." = ? Where ".$cond." = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('member.update');
        }
    }

    public function city_update()
    {
        if(isset($_POST['val1']) &&
            isset($_POST['val2']) 
        ){
            $nvalue = $_POST['val1'];
            $condval = $_POST['val2'];
            
            DB::update("UPDATE cities SET city_name = ? Where city_id = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('city.update');
        }
    }

    public function club_update()
    {
        if(isset($_POST['val1']) &&
            isset($_POST['val2']) 
        ){
            $nvalue = $_POST['val1'];
            $condval = $_POST['val2'];
            
            DB::update("UPDATE clubs SET club_name = ? Where club_id = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('club.update');
        }
    }

    public function genre_update()
    {
        if(isset($_POST['val1']) &&
            isset($_POST['val2']) 
        ){
            $nvalue = $_POST['val1'];
            $condval = $_POST['val2'];
            
            DB::update("UPDATE genres SET genre_name = ? Where genre_id = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('genre.update');
        }
    }

    public function job_update()
    {
        if(isset($_POST['col_opt']) &&
            isset($_POST['val1']) &&
            isset($_POST['val2']) 
        ){
            $col_name = $_POST['col_opt'];
            $nvalue = $_POST['val1'];
            $condval = $_POST['val2'];

            DB::update("UPDATE jobs SET ".$col_name." = ? Where job_id = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('job.update');
        }
    }

    public function jtype_update()
    {
        if(isset($_POST['val1']) &&
            isset($_POST['val2']) 
        ){
            $nvalue = $_POST['val1'];
            $condval = $_POST['val2'];
            
            DB::update("UPDATE j_types SET type_name = ? Where type_id = ?",
              [$nvalue, $condval]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully updated!!');
                </script>
            ";
            return view('jtype.update');
        }
    }
}
