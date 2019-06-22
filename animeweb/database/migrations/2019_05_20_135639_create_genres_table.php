<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $creategenretab ="
            CREATE TABLE genres(
                genre_id bigint(20) not null AUTO_INCREMENT,
                genre_name varchar(191),
                PRIMARY KEY (genre_id)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($creategenretab);
        //CreateTables::creategenre();
    /*
        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('genre_id');
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
        DB::dropIfExists('genres');
    }
}
