<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Grade;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Student::factory(100)->create();
        Grade::factory(35)->create();
        // Department::factory(5)->create();

        Department::factory()->create([
            'name' => 'PPLG',
        ]);

        Department::factory()->create([
            'name' => 'Animasi 2D',
        ]);

        Department::factory()->create([
            'name' => 'Animasi 3D',
        ]);

        Department::factory()->create([
            'name' => 'Desain Grafis',
        ]);

        Department::factory()->create([
            'name' => 'Teknik Grafika',
        ]);
    }
}
