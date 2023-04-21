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
        $families = [];

        for ($i = 1; $i < 11; $i++) {
            $families[] = [
                'id' => $i,
                'title_en' => 'REVIT FAMILY NAME EN',
                'title_ua' => 'REVIT FAMILY NAME UA',
                'description_en' => "EN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'description_ua' => "UA Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'image' => 'families/new_family_image' . $i . '.png',
                'file' => 'families/M_Desk' . $i . '.zip',
            ];
        }

        DB::table('families')->insert($families);
    }
}
