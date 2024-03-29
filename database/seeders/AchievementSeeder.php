<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([
            [
                'title_ua' => '60+',
                'title_en' => '60+',
                'subtitle_ua' => 'CONTENTED CUSTOMERS',
                'subtitle_en' => 'CONTENTED CUSTOMERS',
                'image' => 'achievements/achievement_1.png',
            ],
            [
                'title_ua' => '80%',
                'title_en' => '80%',
                'subtitle_ua' => 'CLIENTS STAY WITH US',
                'subtitle_en' => 'CLIENTS STAY WITH US',
                'image' => 'achievements/achievement_2.png',
            ],
            [
                'title_ua' => '7',
                'title_en' => '7',
                'subtitle_ua' => 'YEARS EXPERIENCE',
                'subtitle_en' => 'YEARS EXPERIENCE',
                'image' => 'achievements/achievement_3.png',
            ],
            [
                'title_ua' => '1100+',
                'title_en' => '1100+',
                'subtitle_ua' => 'COMPLETED PROJECTS',
                'subtitle_en' => 'COMPLETED PROJECTS',
                'image' => 'achievements/achievement_4.png',
            ],
            [
                'title_ua' => '35+',
                'title_en' => '35+',
                'subtitle_ua' => 'SKILLED EMPLOYEES',
                'subtitle_en' => 'SKILLED EMPLOYEES',
                'image' => 'achievements/achievement_5.png',
            ],
            [
                'title_ua' => '500+',
                'title_en' => '500+',
                'subtitle_ua' => 'DESIGNED FAMILIES',
                'subtitle_en' => 'DESIGNED FAMILIES',
                'image' => 'achievements/achievement_6.png',
            ],
        ]);
    }
}
