<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateOrReplaceMemberViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'view:CreateOrReplaceMemberView';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or Replace SQL View.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::statement("
            CREATE VIEW member_infos
            AS 
            SELECT m.member_id, m.member_name, m.email, m.password, cl.club_name, ct.city_name, jt.type_name 
          FROM members as m
          LEFT JOIN clubs as cl ON cl.club_id = m.club_id 
          LEFT JOIN cities as ct ON ct.city_id = m.city_id 
          LEFT JOIN jobs as jb ON jb.member_id = m.member_id
          LEFT JOIN j_types as jt ON jt.type_id = jb.type_id 
            "); 
    }
}
