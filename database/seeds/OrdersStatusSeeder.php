<?php

use Illuminate\Database\Seeder;

class OrdersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordersstatus')->insert([
            [
                'caption' => 'В производстве'
            ],
            [
                'caption' => 'В процессе'
            ],
            [
                'caption' => 'Заявка завершена'
            ],
        ]);
    }
}
