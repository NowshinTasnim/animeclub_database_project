<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomepageController@show_home')->name('welcome');

Auth::routes();

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');

Route::post('/mywork','Auth\LoginController@login')->name('login.submit');

Route::get('/member', 'ViewController@show_view');

Route::get('/anime', 'ProcedureController@show_proc');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm');
	Route::post('/home', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	
	Route::get('/home','AdminController@index');
	
	//insertion
	Route::get('/anime_insert','InsertController@showAnimeForm');
	Route::post('/anime_insert','InsertController@anime_insert')->name('anime.insert.submit');

	Route::get('/member_insert','InsertController@showMemberForm');
	Route::post('/member_insert','InsertController@member_insert')->name('member.insert.submit');

	Route::get('/city_insert','InsertController@showCityForm');
	Route::post('/city_insert','InsertController@city_insert')->name('city.insert.submit');

	Route::get('/club_insert','InsertController@showClubForm');
	Route::post('/club_insert','InsertController@club_insert')->name('club.insert.submit');

	Route::get('/genre_insert','InsertController@showGenreForm');
	Route::post('/genre_insert','InsertController@genre_insert')->name('genre.insert.submit');

	Route::get('/job_insert','InsertController@showJobForm');
	Route::post('/job_insert','InsertController@job_insert')->name('job.insert.submit');

	Route::get('/jtype_insert','InsertController@showJtypeForm');
	Route::post('/jtype_insert','InsertController@jtype_insert')->name('jtype.insert.submit');

	//deletion
	Route::get('/anime_delete','DeleteController@showAnimeForm');
	Route::post('/anime_delete','DeleteController@anime_delete')->name('anime.delete.submit');	

	Route::get('/member_delete','DeleteController@showMemberForm');
	Route::post('/member_delete','DeleteController@member_delete')->name('member.delete.submit');

	Route::get('/city_delete','DeleteController@showCityForm');
	Route::post('/city_delete','DeleteController@city_delete')->name('city.delete.submit');

	Route::get('/club_delete','DeleteController@showClubForm');
	Route::post('/club_delete','DeleteController@club_delete')->name('club.delete.submit');

	Route::get('/genre_delete','DeleteController@showGenreForm');
	Route::post('/genre_delete','DeleteController@genre_delete')->name('genre.delete.submit');

	Route::get('/job_delete','DeleteController@showJobForm');
	Route::post('/job_delete','DeleteController@job_delete')->name('job.delete.submit');

	Route::get('/jtype_delete','DeleteController@showJtypeForm');
	Route::post('/jtype_delete','DeleteController@jtype_delete')->name('jtype.delete.submit');

	//update
	Route::get('/anime_update','UpdateController@showAnimeForm');
	Route::post('/anime_update','UpdateController@anime_update')->name('anime.update.submit');

	Route::get('/member_update','UpdateController@showMemberForm');
	Route::post('/member_update','UpdateController@member_update')->name('member.update.submit');

	Route::get('/city_update','UpdateController@showCityForm');
	Route::post('/city_update','UpdateController@city_update')->name('city.update.submit');

	Route::get('/club_update','UpdateController@showClubForm');
	Route::post('/club_update','UpdateController@club_update')->name('club.update.submit');

	Route::get('/genre_update','UpdateController@showGenreForm');
	Route::post('/genre_update','UpdateController@genre_update')->name('genre.update.submit');

	Route::get('/job_update','UpdateController@showJobForm');
	Route::post('/job_update','UpdateController@job_update')->name('job.update.submit');

	Route::get('/jtype_update','UpdateController@showJtypeForm');
	Route::post('/jtype_update','UpdateController@jtype_update')->name('jtype.update.submit');

	//show
	Route::get('/anime_show','ShowController@anime_show');

	Route::get('/member_show','ShowController@member_show');

	Route::get('/city_show','ShowController@city_show');

	Route::get('/club_show','ShowController@club_show');

	Route::get('/genre_show','ShowController@genre_show');

	Route::get('/job_show','ShowController@job_show');

	Route::get('/jtype_show','ShowController@jtype_show');

});


