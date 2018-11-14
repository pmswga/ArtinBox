<?php

use Illuminate\Database\Seeder;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UsersType')->insert([
            [
                'caption' => 'Администратор'
            ],
            [
                'caption' => 'Менеджер'
            ],
            [
                'caption' => 'Мастер'
            ]
        ]);
    }
}
