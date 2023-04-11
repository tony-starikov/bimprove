<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];

        for ($i = 1; $i < 11; $i++) {
            $posts[] = [
                'id' => $i,
                'title_ua' => '10 REASONS TO TRANSFER FROM ARCHICAD TO BIM ' . $i . ' UA',
                'title_en' => '10 REASONS TO TRANSFER FROM ARCHICAD TO BIM ' . $i,
                'slug' => '10-reasons-to-transfer-from-arhicad-to-bim-' . $i,
                'image' => 'posts/post' . $i . '.png',
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
