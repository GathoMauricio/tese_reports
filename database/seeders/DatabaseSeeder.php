<?php

namespace Database\Seeders;

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
        $this->call(SeccionSeeder::class);
        $this->call(ReporteSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(AsesorSeeder::class);
        $this->call(AlumnoSeeder::class);
    }
}
