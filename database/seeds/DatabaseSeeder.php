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
        
        $this->call(ContactosSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
