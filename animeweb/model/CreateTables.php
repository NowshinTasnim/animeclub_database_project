<?php
namespace Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;

public class CreateTables{
    public static function createclub()
    {
        $createclubtab ="
            CREATE TABLE clubs(
                club_id bigint(20) not null AUTO_INCREMENT PRIMARY KEY,
                name varchar(191)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createclubtab);
    }

    public static function createcity()
    {
        $createcitytab ="
            CREATE TABLE cities(
                city_id bigint(20) not null AUTO_INCREMENT,
                name varchar(191),
                PRIMARY KEY (city_id) 
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createcitytab);
    }

    public static function createmember()
    {
        $createmembertab ="
            CREATE TABLE members(
                member_id bigint(20) not null AUTO_INCREMENT,
                name VARCHAR(191) NOT NULL,
                email VARCHAR(191) NOT NULL UNIQUE,
                password VARCHAR(191) NOT NULL,
                remember_token varchar(100),
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
    }

    public static function createjtype()
    {
        $createjtypetab ="
            CREATE TABLE j_types(
                type_id bigint(20) not null AUTO_INCREMENT,
                name varchar(191),
                PRIMARY KEY (type_id)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createjtypetab);
    }

    public static function createjob()
    {
        $createjobtab ="
            CREATE TABLE jobs(
                job_id bigint(20) not null AUTO_INCREMENT,
                total_work bigint(4),
                member_id bigint(4) not null,
                type_id bigint(4) not null,
                PRIMARY KEY (job_id),
                FOREIGN KEY (member_id) REFERENCES members (member_id) on delete cascade,
                FOREIGN KEY (type_id) REFERENCES j_typesypes (type_id) on delete cascade
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createjobtab);
    }

    public static function creategenre()
    {
        $creategenretab ="
            CREATE TABLE genres(
                genre_id bigint(20) not null AUTO_INCREMENT,
                name varchar(191),
                PRIMARY KEY (genre_id)
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($creategenretab);
    }

    public static function createanime()
    {
        $createanimetab ="
            CREATE TABLE animes(
                anm_id bigint(20) not null AUTO_INCREMENT,
                name varchar(191),
                release_date date,
                club_id bigint(4) not null,
                genre_id bigint(4) not null,
                member_id bigint(4) not null,
                PRIMARY KEY (anm_id),
                FOREIGN KEY (club_id) REFERENCES Clubs (club_id) on delete cascade,
                FOREIGN KEY (genre_id) REFERENCES Genres (genre_id) on delete cascade,
                FOREIGN KEY (member_id) REFERENCES Members (member_id) on delete cascade
            )
            COLLATE='utf8mb4_unicode_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=1;
        ";

        DB::statement($createanimetab);
    }

    public static function createpasswordreset()
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
    }

}

?>