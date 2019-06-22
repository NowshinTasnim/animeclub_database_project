<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createanimetab ="
            CREATE TABLE animes(
                anm_id bigint(20) not null AUTO_INCREMENT,
                anm_name varchar(191) Unique,
                release_date date,
                club_id bigint(4) not null,
                genre_id bigint(4) not null,
                member_id bigint(4) not null,
                PRIMARY KEY (anm_id),
                FOREIGN KEY (club_id) REFERENCES Clubs (club_id) on delete cascade,
                FOREIGN KEY (genre_id) REFERENCES Genres (genre_id) on delete cascade,
                FOREIGN KEY (member_id) REFERENCES Members (member_id) on delete cascade
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createanimetab);
        //CreateTables::createanime();
        /*
        Schema::create('animes', function (Blueprint $table) {
            $table->bigIncrements('anm_id');
            $table->string('name'); 
            $table->date('release_date');
            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('club_id')->references('club_id')->on('clubs')->onDelete('cascade');
            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('cascade');
            $table->foreign('member_id')->references('member_id')->on('members')->onDelete('cascade');
        });
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('animes');
        $table->dropForeign('animes_member_id_foreign');
        $table->dropForeign('animes_genre_id_foreign');
        $table->dropForeign('animes_club_id_foreign');
    }
}
