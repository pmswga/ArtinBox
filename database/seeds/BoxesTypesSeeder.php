<?php

use Illuminate\Database\Seeder;

class BoxesTypesSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('boxestype')->insert([
            [
                'caption' => 'Стандартный (крышка сверху)'
            ],
            [
                'caption' => 'Стандартный (с обвязкой)'
            ],
            [
                'caption' => 'Живописный'
            ],
            [
                'caption' => 'Железный'
            ],
            [
                'caption' => 'Климатический'
            ],
            [
                'caption' => 'Музейный'
            ],
        ]);
    }
}
