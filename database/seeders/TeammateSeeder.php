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
                'linkedin_url' => 'https://www.linkedin.com/in/vitaliy-vynogradov/',
            ],
            [
                'name_ua' => 'Kseniya',
                'name_en' => 'Kseniya',
                'surname_ua' => 'Kutsenko',
                'surname_en' => 'Kutsenko',
                'position_ua' => 'Director of Scan to BIM',
                'position_en' => 'Director of Scan to BIM',
                'image' => 'teammates/Kseniya_1x_2.png',
                'linkedin_url' => 'https://www.linkedin.com/in/kseniya-kutsenko-0ab737216/',
            ],
            [
                'name_ua' => 'Kirill',
                'name_en' => 'Kirill',
                'surname_ua' => 'Obertivich',
                'surname_en' => 'Obertivich',
                'position_ua' => 'Head Teacher',
                'position_en' => 'Head Teacher',
                'image' => 'teammates/Kirill_1x_2.png',
                'linkedin_url' => 'https://www.linkedin.com/in/kirill-o-2557a3132/',
            ],
            [
                'name_ua' => 'Anton',
                'name_en' => 'Anton',
                'surname_ua' => 'Yakushenko',
                'surname_en' => 'Yakushenko',
                'position_ua' => 'Director of Telecommunications Design',
                'position_en' => 'Director of Telecommunications Design',
                'image' => 'teammates/Anton_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/anton-yakushenko-81b951214/',
            ],
            [
                'name_ua' => 'Nikita',
                'name_en' => 'Nikita',
                'surname_ua' => 'Snizhko',
                'surname_en' => 'Snizhko',
                'position_ua' => 'Director of development department',
                'position_en' => 'Director of development department',
                'image' => 'teammates/Nikita_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/nikita-snizhko/',
            ],
            [
                'name_ua' => 'Yurii',
                'name_en' => 'Yurii',
                'surname_ua' => 'Kupshinskiy',
                'surname_en' => 'Kupshinskiy',
                'position_ua' => 'Architect',
                'position_en' => 'Architect',
                'image' => 'teammates/Yurii_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/yurii-kupchynskyi-0a634b217/',
            ],
            [
                'name_ua' => 'Denis',
                'name_en' => 'Denis',
                'surname_ua' => 'Moshenskyi',
                'surname_en' => 'Moshenskyi',
                'position_ua' => 'Director of MEP Coordination and Fabrication department',
                'position_en' => 'Director of MEP Coordination and Fabrication department',
                'image' => 'teammates/Denis_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/denys-moshenskyi/',
            ],
            [
                'name_ua' => 'Olga',
                'name_en' => 'Olga',
                'surname_ua' => 'Vynogradova',
                'surname_en' => 'Vynogradova',
                'position_ua' => 'Director of Operations',
                'position_en' => 'Director of Operations',
                'image' => 'teammates/Olga_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/olgavynogradova/',
            ],
            [
                'name_ua' => 'Illia',
                'name_en' => 'Illia',
                'surname_ua' => 'Karpenko',
                'surname_en' => 'Karpenko',
                'position_ua' => 'Director of BIM content creation department',
                'position_en' => 'Director of BIM content creation department',
                'image' => 'teammates/Illia_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/illia-karpenko-551a1a257/',
            ],
        ]);
    }
}
