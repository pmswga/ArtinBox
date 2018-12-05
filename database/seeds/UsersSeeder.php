<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Иван',
                'second_name' => 'Админыч',
                'email' => 'admin@admin.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 1,
            ],
            [
                'name' => 'Сергей',
                'second_name' => 'Петров',
                'email' => 'manager@manager.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 2,
            ],
            [
                'name' => 'Павел',
                'second_name' => 'Палыч',
                'email' => 'master@master.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 3,
            ],
        ]);
    }
}
