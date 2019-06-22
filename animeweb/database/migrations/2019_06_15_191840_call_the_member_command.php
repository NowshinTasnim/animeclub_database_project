<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;
class CallTheMemberCommand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Artisan::call("view:CreateOrReplaceMemberView");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
