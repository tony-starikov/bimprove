<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('families')->insert([
            [
                'title_en' => 'Communication Device LineArray',
                'title_ua' => 'Communication Device LineArray',
                'description_en' => "",
                'description_ua' => "",
                'image' => 'families/communication_device_line_array.jpg',
                'file' => 'families/communication_device_line_array.zip',
            ],
            [
                'title_en' => 'Furniture Audience Seatings',
                'title_ua' => 'Furniture Audience Seatings',
                'description_en' => "",
                'description_ua' => "",
                'image' => 'families/furniture_audience_seatings.jpg',
                'file' => 'families/furniture_audience_seatings.zip',
            ],
            [
                'title_en' => 'Smoke Detector',
                'title_ua' => 'Smoke Detector',
                'description_en' => "",
                'description_ua' => "",
                'image' => 'families/smoke_detector.jpg',
                'file' => 'families/smoke_detector.zip',
            ],
        ]);
    }
}
