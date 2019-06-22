@extends('layouts.adminlayout')

@section('content')
<div class="admin_home_container fix">
    <div class="admin_home_header fix"><label>ADMIN MENU</label></div>

    <div class="admin_home_nav fix">
        <div class="nav1 fix">
            <label class="nav1_head fix">Anime</label>
            <div class="nav1_content fix">
                <a href="{{ action('InsertController@showAnimeForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@anime_show')}}">VIEW INFORMATION</a>
            </div>
        </div>

        <div class="nav2 fix">
            <label class="nav2_head fix">Member</label>
            <div class="nav2_content fix">
                <a href="{{ action('InsertController@showMemberForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@member_show') }}">VIEW INFORMATION</a>
            </div>
        </div>

        <div class="nav2 fix">
            <label class="nav2_head fix">City</label>
            <div class="nav2_content fix">
                <a href="{{ action('InsertController@showCityForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@city_show') }}">VIEW INFORMATION</a>
            </div>
        </div>
        <div class="nav2 fix">
            <label class="nav2_head fix">Club</label>
            <div class="nav2_content fix">
                <a href="{{ action('InsertController@showClubForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@club_show') }}">VIEW INFORMATION</a>
            </div>
        </div>

        <div class="nav2 fix">
            <label class="nav2_head fix">Genre</label>
            <div class="nav2_content fix">
                <a href="{{ action('InsertController@showGenreForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@genre_show') }}">VIEW INFORMATION</a>
            </div>
        </div>
        <div class="nav2 fix">
            <label class="nav2_head fix">Job</label>
            <div class="nav2_content fix">
                <a href="{{ action('InsertController@showJobForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@job_show')}}">VIEW INFORMATION</a>
            </div>
        </div>

        <div class="nav1 fix">
            <label class="nav1_head fix">Job type</label>
            <div class="nav1_content fix">
                <a href="{{ action('InsertController@showJtypeForm') }}">ADD Information</a>
                <a href="{{ action('ShowController@jtype_show') }}">VIEW INFORMATION</a>
            </div>
        </div>
    </div>
</div>
@endsection
