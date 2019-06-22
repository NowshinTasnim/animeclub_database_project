<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
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
        return view('anime.delete');
    }

    public function showMemberForm()
    {
        return view('member.delete');
    }

    public function showCityForm()
    {
        return view('city.delete');
    }

    public function showClubForm()
    {
        return view('club.delete');
    }

    public function showGenreForm()
    {
        return view('genre.delete');
    }

    public function showJobForm()
    {
        return view('job.delete');
    }

    public function showJtypeForm()
    {
        return view('jtype.delete');
    }

    public function anime_delete()
    {
        if(isset($_POST['anm']) &&
            isset($_POST['del_opt'])
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['anm'];
            
            DB::delete('DELETE FROM animes where '.$opt.' = ?',[$value]);
            

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('anime.delete');
        }
    }

    public function member_delete()
    {
        if(isset($_POST['mem']) &&
            isset($_POST['del_opt']) 
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['mem'];
            
            if($opt == 'Member id')
            {
                DB::delete('DELETE FROM members where member_id = ?',[$value]);
                DB::delete('DELETE FROM animes where member_id = ?',[$value]);
                DB::delete('DELETE FROM jobs where member_id = ?',[$value]);
            }
            else
            {
                DB::delete('DELETE FROM members where email = ?',[$value]);;
            }

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('member.delete');
        }
    }

    public function city_delete()
    {
        if(isset($_POST['val']) &&
            isset($_POST['del_opt']) 
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['val'];
            
            DB::delete('DELETE FROM cities where '.$opt.' = ?',[$value]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('city.delete');
        }
    }

    public function club_delete()
    {
        if(isset($_POST['val']) &&
            isset($_POST['del_opt']) 
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['val'];
            
            DB::delete('DELETE FROM clubs where '.$opt.' = ?',[$value]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('club.delete');
        }
    }

    public function genre_delete()
    {
        if(isset($_POST['val']) &&
            isset($_POST['del_opt']) 
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['val'];

            DB::delete('DELETE FROM genres where ".&opt." = ?',[$value]);
            
            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('genre.delete');
        }
    }

    public function job_delete()
    {
        if(isset($_POST['val']) 
        ){
            $value = $_POST['val'];
            
            DB::delete('DELETE FROM jobs where job_id = ?',[$value]);
            

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('job.delete');
        }
    }

    public function jtype_delete()
    {
        if(isset($_POST['val']) &&
            isset($_POST['del_opt']) 
        ){
            $opt = $_POST['del_opt'];
            $value = $_POST['val'];
            
            DB::delete('DELETE FROM j_types where '.$opt.' = ?',[$value]);

            echo "
                <script type='text/javascript'>
                    alert('Succesfully deleted!!');
                </script>
            ";
            return view('jtype.delete');
        }
    }
}
