<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $plugins = [];
//
//        for ($i = 1; $i < 11; $i++) {
//            $plugins[] = [
//                'id' => $i,
//                'title_en' => 'REVIT SCRIPT NAME EN',
//                'title_ua' => 'REVIT SCRIPT NAME UA',
//                'description_en' => "EN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
//                'description_ua' => "UA Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
//                'video_url' => 'https://www.youtube.com/embed/UiY2lCRKaOU',
//                'image' => 'plugins/script_image' . $i . '.png',
//                'logo' => 'plugins/script_logo' . $i . '.png',
//                'file' => 'plugins/DWGtest' . $i . '.zip',
//                'slug' => 'plugin' . $i,
//            ];
//        }

        DB::table('plugins')->insert([
            [
                'title_en' => 'Auto Join In View',
                'title_ua' => 'Auto Join In View',
                'description_en' => "
                    Automatic join all elements of selected categories within the active view. This process eliminates overlapping or intersecting elements.
                ",
                'description_ua' => "
                    Automatic join all elements of selected categories within the active view. This process eliminates overlapping or intersecting elements.
                ",
                'video_url' => 'https://youtu.be/PkCfyuYJ6PM',
                'image' => 'plugins/1.png',
                'logo' => 'plugins/AutoJoinInView.png',
                'file' => 'plugins/AutoJoinInView_D2.6.1_R21.zip',
                'slug' => 'AutoJoinInView'
            ],
            [
                'title_en' => 'Columns To Grids Intersection',
                'title_ua' => 'Columns To Grids Intersection',
                'description_en' => "
                    Isolating columns in the active view that are not placed on the grids' intersection. This script can help architects, engineers, and other professionals.
                ",
                'description_ua' => "
                    Isolating columns in the active view that are not placed on the grids' intersection. This script can help architects, engineers, and other professionals.
                ",
                'video_url' => 'https://youtu.be/wzEeTXwmarU',
                'image' => 'plugins/2.png',
                'logo' => 'plugins/ColumnsToGridsIntersection.png',
                'file' => 'plugins/ColumnsToGridsIntersection_D2.6.1_R21.zip',
                'slug' => 'ColumnsToGridsIntersection'
            ],
            [
                'title_en' => 'Align MEP',
                'title_ua' => 'Align MEP',
                'description_en' => "
                    Automate the process of relocating MEP elements with a selected distance. This script can help architects, engineers, and other professionals.
                ",
                'description_ua' => "
                    Automate the process of relocating MEP elements with a selected distance. This script can help architects, engineers, and other professionals.
                ",
                'video_url' => 'https://youtu.be/1MO65376abU',
                'image' => 'plugins/3.png',
                'logo' => 'plugins/AlignMEP.png',
                'file' => 'plugins/AlignMEP_D2.6.1_R21.zip',
                'slug' => 'AlignMEP'
            ],
        ]);
    }
}
