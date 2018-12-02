<?php

use Illuminate\Database\Seeder;

class ProductionStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productionsteps')->insert([
            [
                'id_box_type' => 3,
                'id_step' => 1,
                'caption' => 'Деталь А размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 2,
                'caption' => 'Деталь B размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 3,
                'caption' => 'Деталь A размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 4,
                'caption' => 'Деталь B размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 5,
                'caption' => 'Деталь C размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 6,
                'caption' => 'Деталь C размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 7,
                'caption' => 'Деталь D размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 8,
                'caption' => ' Деталь E размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 9,
                'caption' => 'Деталь D размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 10,
                'caption' => 'Деталь E размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 11,
                'caption' => 'Деталь F размер 1'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 12,
                'caption' => 'Деталь F размер 2'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 13,
                'caption' => 'Собрать каркас, часть первая'
            ],
            [
                'id_box_type' => 3,
                'id_step' => 14,
                'caption' => 'Собрать каркас часть вторая'
            ],
        ]);
    }
}
