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
                'id' => 1,
                'title_first' => 'METALLURGY',
                'title_second' => 'COMBINE AZOVSTAL',
                'subtitle' => 'Scan to BIM',
                'disciplines' => 'MEP',
                'parameter_1' => 'LOD: 200',
                'parameter_2' => 'Area: 38950m2',
                'parameter_3' => ' ',
                'description' => "3D model of part of huge Ukrainian factory Azovstal. The model was created in one month with a team of 4 modelers and 1 Project Manager. As the final result, customer received 2 models with designed views, sheets, and schedules.
                ",
                'image' => 'works/Azovstal_1x.png',
                'image_small' => 'works/Azovstal_small.png',
            ],
            [
                'id' => 2,
                'title_first' => 'Northern',
                'title_second' => 'GZK',
                'subtitle' => 'Scan to BIM',
                'disciplines' => 'MEP, Structural',
                'parameter_1' => 'LOD: 200',
                'parameter_2' => 'Area: 32100m2',
                'parameter_3' => ' ',
                'description' => "3D model of part of huge Ukrainian factory NGZK. The model was created in one month with a team of 3 modelers and 1 Project Manager. As the final result, the customer received a model with designed views, sheets, and schedules.
                ",
                'image' => 'works/Northen_CZK_1x.png',
                'image_small' => 'works/Northen_CZK_small.png',
            ],
            [
                'id' => 3,
                'title_first' => 'Landscape',
                'title_second' => '25 ha',
                'subtitle' => 'Scan to BIM',
                'disciplines' => 'Topography, Exterior of Buildings',
                'parameter_1' => 'LOD: 300',
                'parameter_2' => 'Area: 250000m2',
                'parameter_3' => ' ',
                'description' => "3D model of part of a huge industrial territory. The model was created in one month with a team of 2 modelers and 1 Project Manager. As the final result, the customer received a detailed 3D model according to all his requirements.
                ",
                'image' => 'works/Landscape_1x.png',
                'image_small' => 'works/Landscape_small.png',
            ],
            [
                'id' => 4,
                'title_first' => 'Hypermarket',
                'title_second' => ' ',
                'subtitle' => 'Scan to BIM',
                'disciplines' => 'Architecture, Structure, MEPF',
                'parameter_1' => 'LOD: 300',
                'parameter_2' => 'Area: 7340m2',
                'parameter_3' => ' ',
                'description' => "3D model of part of hypermarket. The model was created in two weeks with a team of 2 modelers and 1 Project Manager. As the final result, a customer received a detailed 3D model with designed views and sheets.
                ",
                'image' => 'works/Hypermarket_1x.png',
                'image_small' => 'works/Hypermarket_small.png',
            ],
            [
                'id' => 5,
                'title_first' => 'KONTORSKA 15',
                'title_second' => ' ',
                'subtitle' => 'Residential Building',
                'disciplines' => 'Architecture concept project',
                'parameter_1' => 'LOD: 300',
                'parameter_2' => 'Area: 2100m2',
                'parameter_3' => 'Floors: 6',
                'description' => "3D model of residential building in Kharkiv, Ukraine. It was our conceptual project of new building in old historical city area. First two floors must be commercial, after residential floors with flats. In the top floor we have modeled big penthouse flat. We produced Architecture model, some renders and drawings for presentation.
                ",
                'image' => 'works/Kontorska_1x.png',
                'image_small' => 'works/Kontorska_small.png',
            ],
            [
                'id' => 6,
                'title_first' => 'OFFICE',
                'title_second' => ' ',
                'subtitle' => 'Office Building',
                'disciplines' => 'Architecture concept project',
                'parameter_1' => 'LOD: 350',
                'parameter_2' => 'Area: 1400m2',
                'parameter_3' => 'Floors: 6',
                'description' => "The main idea of shape is to allow sunbeams access for neighbor building and make as much office area as it possible, because of the high price of earth. Lot of office have their own big open terraces.
                ",
                'image' => 'works/Office_1x.png',
                'image_small' => 'works/Office_small.png',
            ],
            [
                'id' => 7,
                'title_first' => 'VILLA',
                'title_second' => 'IN THE FOREST',
                'subtitle' => 'Residential Building',
                'disciplines' => 'Architecture concept project',
                'parameter_1' => 'LOD: 350',
                'parameter_2' => 'Area: 170m2',
                'parameter_3' => 'Floors: 1',
                'description' => "3D model of residential house for big family. Project contains big living room, 3 bedrooms, 4 bath and Spa zone. We placed big terrace with fireplace and pool. We produced Architecture model, some renders and drawings for presentation.
                ",
                'image' => 'works/Villa_1x.png',
                'image_small' => 'works/Villa_small.png',
            ],
            [
                'id' => 8,
                'title_first' => 'Rooftop',
                'title_second' => ' ',
                'subtitle' => 'Telecommunication design',
                'disciplines' => ' ',
                'parameter_1' => 'LOD building: 300',
                'parameter_2' => 'LOD equipment: 500',
                'parameter_3' => 'LOD structure: 500',
                'description' => "Modeling of the building by point cloud. Modeling of 2 steel structures with equipment (Antennas, RRU, cabinets) for 3 sectors and cable trays between them. Safety objects. Production drawings.
                ",
                'image' => 'works/Rooftop_1x.png',
                'image_small' => 'works/Rooftop_small.png',
            ],
            [
                'id' => 9,
                'title_first' => 'Tower',
                'title_second' => ' ',
                'subtitle' => ' ',
                'disciplines' => ' ',
                'parameter_1' => 'LOD tower: 400',
                'parameter_2' => 'LOD equipment: 500',
                'parameter_3' => 'Time: 43h',
                'description' => "Modeling of the tower with equipment supports at the top. Analytical model. Equipment. Cable trays. Safety objects. The area around the tower.
                ",
                'image' => 'works/Towe_1x.png',
                'image_small' => 'works/Tower_small.png',
            ],
        ]);
    }
}
