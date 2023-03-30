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
        $plugins = [];

        for ($i = 1; $i < 11; $i++) {
            $plugins[] = [
                'id' => $i,
                'title_en' => 'REVIT SCRIPT NAME EN',
                'title_ua' => 'REVIT SCRIPT NAME UA',
                'description_en' => "EN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'description_ua' => "UA Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
                'video_url' => 'https://www.youtube.com/embed/UiY2lCRKaOU',
                'image' => 'plugins/script_image' . $i . '.png',
                'logo' => 'plugins/script_logo' . $i . '.png',
                'file' => 'plugins/DWGtest' . $i . '.zip',
                'slug' => 'plugin' . $i,
            ];
        }

        DB::table('plugins')->insert($plugins);
    }
}
