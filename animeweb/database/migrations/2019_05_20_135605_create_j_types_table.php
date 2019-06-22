<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateJTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createjtypetab ="
            CREATE TABLE j_types(
                type_id bigint(20) not null AUTO_INCREMENT,
                type_name varchar(191),
                PRIMARY KEY (type_id)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createjtypetab);
        //CreateTables::createjtype();
        /*
        Schema::create('j_types', function (Blueprint $table) {
            $table->bigIncrements('type_id');
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
        DB::dropIfExists('j_types');
    }
}
