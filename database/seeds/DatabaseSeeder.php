<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTypeSeeder::class,
            UsersSeeder::class,
            BoxesTypesSeeder::class,
            OrdersStatusSeeder::class,
            MaterialsTypeSeeder::class,
            ProductionStepsSeeder::class
        ]);
    }
}
