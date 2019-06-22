<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         $command = "
            CREATE OR REPLACE PROCEDURE animedata() 
                
            BEGIN
                SELECT *  
            from animes, members,genres,clubs
            where animes.member_id = members.member_id
            and animes.genre_id = genres.genre_id
            and animes.club_id = clubs.club_id
            order by anm_name ;
            END;
        ";

        DB::connection()->getPdo()->exec($command);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $command = "DROP PROCEDURE tenyearcheck";
        DB::connection()->getPdo()->exec($command);
    }
}