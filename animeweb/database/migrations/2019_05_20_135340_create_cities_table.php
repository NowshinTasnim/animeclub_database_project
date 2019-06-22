<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createcitytab ="
            CREATE TABLE cities(
                city_id bigint(20) not null AUTO_INCREMENT,
                city_name varchar(191),
                PRIMARY KEY (city_id) 
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createcitytab);
        //CreateTables::createcity();
        /*
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('city_id')->unsigned();
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
        DB::dropIfExists('cities');
    }
}
