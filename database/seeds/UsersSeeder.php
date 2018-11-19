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
                'name' => 'admin',
                'email' => 'admin@admin.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 1,
            ],
            [
                'name' => 'manager',
                'email' => 'manager@manager.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 2,
            ],
            [
                'name' => 'master',
                'email' => 'master@master.ru',
                'password' => Hash::make('qwerty'),
                'id_user_type' => 3,
            ],
        ]);
    }
}
