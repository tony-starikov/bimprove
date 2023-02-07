<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
            [
                'title_ua' => 'BIM management',
                'title_en' => 'BIM management',
                'description_ua' => 'Project development from scratch using BIM technologies on all stages of production ',
                'description_en' => 'Project development from scratch using BIM technologies on all stages of production ',
                'image' => 'service.png',
            ],
        ]);
    }
}
