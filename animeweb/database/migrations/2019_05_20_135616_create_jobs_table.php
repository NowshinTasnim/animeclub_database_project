<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createjobtab ="
            CREATE TABLE jobs(
                job_id bigint(20) not null AUTO_INCREMENT,
                member_id bigint(4) not null,
                type_id bigint(4) not null,
                PRIMARY KEY (job_id),
                FOREIGN KEY (member_id) REFERENCES Members (member_id) on delete cascade,
                FOREIGN KEY (type_id) REFERENCES j_types (type_id) on delete cascade
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createjobtab);
        // CreateTables::createjob();
        /*
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id');
            $table->integer('total_work'); 
            $table->bigInteger('member_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('member_id')->references('member_id')->on('members')->onDelete('cascade');
            $table->foreign('type_id')->references('type_id')->on('j_types')->onDelete('cascade');
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
        DB::dropIfExists('jobs');
        $table->dropForeign('jobs_member_id_foreign');
        $table->dropForeign('jobs_type_id_foreign');
    }
}
