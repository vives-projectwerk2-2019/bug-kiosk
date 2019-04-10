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
        $this->call(DonglesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
