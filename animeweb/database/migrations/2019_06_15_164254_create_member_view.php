<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW member_infos
            AS 
            SELECT m.member_id, m.member_name, m.email, m.password, cl.club_name, ct.city_name, jt.type_name, 
          FROM members as m
          LEFT JOIN clubs as cl ON cl.club_id = m.club_id 
          LEFT JOIN cities as ct ON ct.city_id = m.city_id 
          LEFT JOIN jobs as jb ON jb.member_id = m.member_id
          LEFT JOIN j_types as jt ON jt.type_id = jb.type_id 
            ");

        DB::STATEMENT("
            CREATE VIEW member_works
            AS 
            SELECT m.member_name, m.member_id, count(a.anm_id) as cnt_anime 
            from animes as a RIGHT JOIN members as m
            ON a.member_id = m.member_id
            GROUP BY m.member_id, m.member_name
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::dropIfExists('member_view');
    }
}
