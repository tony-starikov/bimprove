<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title_ua' => 'MEP Coordination',
                'title_en' => 'MEP Coordination',
                'description_ua' => 'Projects development from scratch using BIM technologies on all stages of production.',
                'description_en' => 'Projects development from scratch using BIM technologies on all stages of production.',
                'image' => 'service/MEP_coordination_3.png',
                'slug' => 'mep_coordination',
                'presentation' => 'presentations/mep_coordination.pdf',
            ],
            [
                'title_ua' => 'Telecom Design',
                'title_en' => 'Telecom Design',
                'description_ua' => 'Creation of 3D projects, drawings design, detail development.',
                'description_en' => 'Creation of 3D projects, drawings design, detail development.',
                'image' => 'service/Telecom_3.png',
                'slug' => 'telecom_design',
                'presentation' => 'presentations/telecom_design.pdf',
            ],
            [
                'title_ua' => 'Scan to BIM',
                'title_en' => 'Scan to BIM',
                'description_ua' => 'Creation of quality BIM model by the point clouds according to customers requirements.',
                'description_en' => 'Creation of quality BIM model by the point clouds according to customers requirements.',
                'image' => 'service/Scan_to_BIM_3.png',
                'slug' => 'scan_to_bim',
                'presentation' => 'presentations/scan_to_bim.pdf',
            ],
            [
                'title_ua' => 'BIM modeling',
                'title_en' => 'BIM modeling',
                'description_ua' => 'Development of BIM models and visualizations, providing of project documentation.',
                'description_en' => 'Development of BIM models and visualizations, providing of project documentation.',
                'image' => 'service/Modeling_3.png',
                'slug' => 'bim_modeling',
                'presentation' => 'presentations/bim_modeling.pdf',
            ],
            [
                'title_ua' => 'BIM content creation',
                'title_en' => 'BIM content creation',
                'description_ua' => 'Development of unique parametric Revit families.',
                'description_en' => 'Development of unique parametric Revit families.',
                'image' => 'service/BIM_content_creation_3.png',
                'slug' => 'bim_content_creation',
                'presentation' => 'presentations/bim_content_creation.pdf',
            ],
            [
                'title_ua' => 'Software development',
                'title_en' => 'Software development',
                'description_ua' => 'Projects development from scratch. using BIM technologies on all stages of production.',
                'description_en' => 'Projects development from scratch. using BIM technologies on all stages of production.',
                'image' => 'service/Software_development_3.png',
                'slug' => 'software_development',
                'presentation' => 'presentations/software_development.pdf',
            ],
        ]);
    }
}
