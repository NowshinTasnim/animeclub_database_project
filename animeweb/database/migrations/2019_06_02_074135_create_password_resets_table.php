<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createpassretab ="
            CREATE TABLE password_reset(
                email VARCHAR(191) NOT NULL,
                confirmation_code VARCHAR(191) NOT NULL
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB;
        ";

        DB::statement($createpassretab);
        //CreateTables::createpasswordreset();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_reset');
    }
}
