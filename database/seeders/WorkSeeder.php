<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'title' => 'Residential Building',
                'subtitle' => 'Scan to bim',
                'parameter_1' => 'LOD: 300',
                'parameter_2' => 'Time: 40h',
                'parameter_3' => 'Precision: 15mm',
                'parameter_4' => 'Success: 100%',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero obcaecati quidem vitae voluptatem. Aperiam asperiores dignissimos eius repellat? Alias, quo!',
                'image' => 'works/work_1.png',
                'image_small' => 'works/work_small.png',
            ],
        ]);
    }
}
