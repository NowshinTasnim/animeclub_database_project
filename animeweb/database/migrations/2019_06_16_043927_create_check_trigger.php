<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $command = "
        CREATE OR REPLACE TRIGGER check_name BEFORE INSERT ON members FOR EACH ROW
            BEGIN
                SET New.member_name = UPPER(New.member_name);
            END
        ";
        DB::unprepared($command);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $command = "DROP TRIGGER check_name";
        DB::unprepared($command);
    }
}
