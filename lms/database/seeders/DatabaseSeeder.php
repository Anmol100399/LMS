<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Faculty;
use App\Models\Courses;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(100)->create();
        
        Faculty::factory()->create([
            'name' => 'Adam'
        ]);
        Faculty::factory()->create([
            'name' => 'Joanna'
        ]);
        Faculty::factory()->create([
            'name' => 'Chrishan'
        ]);
        Faculty::factory()->create([
            'name' => 'Gary'
        ]);

        Courses::factory(100)->create();  
    }
}
