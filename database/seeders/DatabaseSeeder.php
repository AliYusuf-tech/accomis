<?php

namespace Database\Seeders;

use App\Models\Role;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            StateTableSeeder::class,
            Lgas_1_TableSeeder::class,
            Lgas_2_TableSeeder::class,
            Lgas_3_TableSeeder::class,
            Lgas_4_TableSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
