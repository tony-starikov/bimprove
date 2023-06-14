<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('page_items')->insert([
            [
                'page_id' => 1,
                'name' => 'main_header',
                'value' => 'THE INDIVIDUAL FIVE-STAR SERVICE:',
            ],
            [
                'page_id' => 1,
                'name' => 'main_subheader',
                'value' => "Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.",
            ],
            [
                'page_id' => 1,
                'name' => 'video_mp4',
                'value' => "video/BIMprove_video.mp4"
            ],
            [
                'page_id' => 1,
                'name' => 'video_webm',
                'value' => "video/BIMprove_video.webm"
            ],
            [
                'page_id' => 1,
                'name' => 'main_bg_image',
                'value' => "main_page/background2.png"
            ],
            [
                'page_id' => 1,
                'name' => 'about_header',
                'value' => "DISCOVER THE COMPREHENSIVE SERVICES OF BIMPROVE LLC"
            ],
            [
                'page_id' => 1,
                'name' => 'about_subheader',
                'value' => "Our goal is to provide a personalized, 5-star level of service to each of our clients."
            ],
            [
                'page_id' => 1,
                'name' => 'about_text',
                'value' => "In just 7 years, BIMprove LLC has grown from a single Scan to BIM service to a company with 6 independent departments, each dedicated to advancing in its respective field. Each department is focused on growth, but all are aligned in our commitment to providing exceptional, personalized service to our clients. We partner with owners, general contractors, and design firms to streamline the BIM process for projects of all sizes and industries, from small commercial to large industrial."
            ],
            [
                'page_id' => 1,
                'name' => 'about_image',
                'value' => "main_page/team_photo.png"
            ],
            [
                'page_id' => 1,
                'name' => 'about_image_small',
                'value' => "main_page/team_small.png"
            ],
            [
                'page_id' => 1,
                'name' => 'services_header',
                'value' => "SERVICES"
            ],
            [
                'page_id' => 1,
                'name' => 'achievements_header',
                'value' => "ACHIEVEMENTS"
            ],
            [
                'page_id' => 1,
                'name' => 'stars_header',
                'value' => "YOUR BUSINESS DESERVES OUR FIVE-STARS:"
            ],
            [
                'page_id' => 1,
                'name' => 'testimonials_header',
                'value' => "TESTIMONIALS"
            ],
            [
                'page_id' => 1,
                'name' => 'portfolio_header',
                'value' => "PORTFOLIO"
            ],
            [
                'page_id' => 1,
                'name' => 'team_header',
                'value' => "TEAM"
            ],
            [
                'page_id' => 1,
                'name' => 'calendar_header',
                'value' => "UNLOCK THE FULL POTENTIAL OF OUR SERVICES."
            ],
            [
                'page_id' => 1,
                'name' => 'calendar_subheader',
                'value' => "Sign up for a meeting now a convenient time for you!"
            ],
            [
                'page_id' => 1,
                'name' => 'calendar_image',
                'value' => "main_page/calendar_image.png"
            ],
        ]);
    }
}
