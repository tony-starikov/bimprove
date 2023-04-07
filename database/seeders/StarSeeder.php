<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->insert([
            [
                'title_ua' => 'Highing quality',
                'title_en' => 'Highing quality',
                'description_ua' => 'Elevate your business with high-quality services.',
                'description_en' => 'Elevate your business with high-quality services.',
                'image' => 'stars/star_image_1.png',
                'image_small' => 'stars/small_star_image_1.svg',
            ],
            [
                'title_ua' => 'Communication with project manager 24/7',
                'title_en' => 'Communication with project manager 24/7',
                'description_ua' => 'Benefit from constant communication with a dedicated project manager available 24/7',
                'description_en' => 'Benefit from constant communication with a dedicated project manager available 24/7',
                'image' => 'stars/star_image_2.png',
                'image_small' => 'stars/small_star_image_2.svg',
            ],
            [
                'title_ua' => 'Non-standard tasks solutions',
                'title_en' => 'Non-standard tasks solutions',
                'description_ua' => 'Rely on us for creative solutions to unique and challenging tasks',
                'description_en' => 'Rely on us for creative solutions to unique and challenging tasks',
                'image' => 'stars/star_image_3.png',
                'image_small' => 'stars/small_star_image_3.svg',
            ],
            [
                'title_ua' => 'Quick project adjustment by the comments',
                'title_en' => 'Quick project adjustment by the comments',
                'description_ua' => 'Enjoy quick and seamless adjustments based on feedback.',
                'description_en' => 'Enjoy quick and seamless adjustments based on feedback.',
                'image' => 'stars/star_image_4.png',
                'image_small' => 'stars/small_star_image_4.svg',
            ],
            [
                'title_ua' => 'Help in work process organization',
                'title_en' => 'Help in work process organization',
                'description_ua' => 'Benefit from our expertise in streamlining the work process for optimal organization.',
                'description_en' => 'Benefit from our expertise in streamlining the work process for optimal organization.',
                'image' => 'stars/star_image_5.png',
                'image_small' => 'stars/small_star_image_5.svg',
            ],
            [
                'title_ua' => 'Contact',
                'title_en' => 'Contact',
                'description_ua' => 'Contact',
                'description_en' => 'Contact',
                'image' => ' ',
                'image_small' => ' ',
            ],
        ]);
    }
}