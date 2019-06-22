<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//use Model\CreateTables;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $createmembertab ="
            CREATE TABLE members(
                member_id bigint(20) not null AUTO_INCREMENT,
                member_name VARCHAR(191) NOT NULL ,
                email VARCHAR(191) NOT NULL UNIQUE,
                password VARCHAR(191) NOT NULL,
                admin varchar(4) default 'no',
                club_id bigint(4) not null,
                city_id bigint(4) not null,
                PRIMARY KEY (member_id),
                FOREIGN KEY (club_id) references Clubs (club_id) on delete cascade,
                FOREIGN KEY (city_id) references Cities (city_id) on delete cascade
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createmembertab);
        //CreateTables::createmember();
        /*
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->string('name'); 
            $table->bigInteger('club_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('club_id')->references('club_id')->on('clubs')->onDelete('cascade');
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade');
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
        DB::dropIfExists('members');
        $table->dropForeign('members_club_id_foreign');
        $table->dropForeign('members_city_id_foreign');
    }
}
