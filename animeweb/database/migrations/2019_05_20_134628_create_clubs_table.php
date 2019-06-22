<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createclubtab ="
            CREATE TABLE clubs(
                club_id bigint(20) not null AUTO_INCREMENT PRIMARY KEY,
                club_name varchar(191)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createclubtab);
        //CreateTables::createclub();
        /*
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('club_id')->unsigned();
            $table->string('name');
            $table->timestamps();
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
        DB::dropIfExists('clubs');
    }
}
