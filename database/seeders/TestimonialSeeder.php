<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Amanda',
                'surname' => 'Milost-Acebey',
                'profession' => 'pointreef - Digital Reality',
                'text' => 'The cooperation with Vitaliy was always very good. Even spontaneous orders were carried out reliably and change requests were always implemented. We are very happy to work with Vitaliy and his team.
                ',
                'image' => 'testimonials/partner_1.png',
            ],
            [
                'name' => 'Austin',
                'surname' => 'Goodman',
                'profession' => 'Midwest Survey Specialist LLC',
                'text' => 'We have had Vitaliy and his team at BIMprove work on several various services. They have be able to deliver on time and done a very fine job. They also receive suggestions and advice to change very well and work to resolve the issue promptly. Very satisfied with the work they have done.
                ',
                'image' => 'testimonials/partner_2.png',
            ],
            [
                'name' => 'Marc',
                'surname' => 'Flören',
                'profession' => 'pointreef - Digital Reality',
                'text' => 'Die zusammenarbeit war sehr angenehm. Pünktliche Abgabe und sehr gute Kommunikation. Das Ergebnis war immer nach unseren Vorstellungen.
                ',
                'image' => 'testimonials/partner_3.png',
            ],
            [
                'name' => 'Dustin',
                'surname' => 'Allen',
                'profession' => 'Midwest Survey Specialist LLC',
                'text' => 'Vitaliy and his entire team are among the most talented and hard working people I know. They have experience in all fields types of virtual environments across many types of deliverables.
                ',
                'image' => 'testimonials/partner_4.png',
            ],
        ]);
    }
}
