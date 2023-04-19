<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeammateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teammates')->insert([
            [
                'name_ua' => 'Vitaly',
                'name_en' => 'Vitaly',
                'surname_ua' => 'Vinogradov',
                'surname_en' => 'Vinogradov',
                'position_ua' => 'CEO',
                'position_en' => 'CEO',
                'image' => 'teammates/Vitaly_1x.png',
            ],
            [
                'name_ua' => 'Kseniya',
                'name_en' => 'Kseniya',
                'surname_ua' => 'Kutsenko',
                'surname_en' => 'Kutsenko',
                'position_ua' => 'Director of Scan to BIM',
                'position_en' => 'Director of Scan to BIM',
                'image' => 'teammates/Kseniya_1x.png',
            ],
            [
                'name_ua' => 'Kirill',
                'name_en' => 'Kirill',
                'surname_ua' => 'Obertivich',
                'surname_en' => 'Obertivich',
                'position_ua' => 'Head Teacher',
                'position_en' => 'Head Teacher',
                'image' => 'teammates/Kirill_1x.png',
            ],
            [
                'name_ua' => 'Anton',
                'name_en' => 'Anton',
                'surname_ua' => 'Yakushenko',
                'surname_en' => 'Yakushenko',
                'position_ua' => 'Director of Telecommunications Design',
                'position_en' => 'Director of Telecommunications Design',
                'image' => 'teammates/Anton_1x.png',
            ],
        ]);
    }
}
