<?php

use Illuminate\Database\Seeder;

class BoxesTypesSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('boxestype')->insert([
            [
                'caption' => 'Стандартный (крышка сверху)',
                'production_steps' => ''
            ],
            [
                'caption' => 'Стандартный (с обвязкой)',
                'production_steps' => ''
            ],
            [
                'caption' => 'Живописный',
                'production_steps' => 'Порядок изготовления: A, B, С, D, E, F'
            ],
            [
                'caption' => 'Железный',
                'production_steps' => ''
            ],
            [
                'caption' => 'Климатический',
                'production_steps' => ''
            ],
            [
                'caption' => 'Музейный',
                'production_steps' => ''
            ],
        ]);
    }
}
