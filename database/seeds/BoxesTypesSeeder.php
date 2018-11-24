<?php

use Illuminate\Database\Seeder;

class BoxesTypesSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('boxestype')->insert([
            [
                'caption' => 'Живописный'
            ],
            [
                'caption' => 'Стандартный'
            ],
            [
                'caption' => 'Музейный'
            ],
            [
                'caption' => 'Железный'
            ],
        ]);
    }
}
