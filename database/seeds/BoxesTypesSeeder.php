<?php

use Illuminate\Database\Seeder;

class BoxesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('BoxesType')->insert([
            [
                'caption' => 'Живописный'
            ],
            [
                'caption' => 'Стандартный'
            ],
        ]);
    }
}
