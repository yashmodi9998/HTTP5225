<?php

namespace Database\Seeders;

use App\Models\Course;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
       Course::factory()->create([
        'courseID' => 'HTTP5222',
        'name' => 'JS',
       ]);
       Course::factory()->create([
        'courseID' => 'HTTP5223',
        'name' => 'PHP',
       ]);Course::factory()->create([
        'courseID' => 'HTTP5224',
        'name' => 'NodeJS',
       ]);Course::factory()->create([
        'courseID' => 'HTTP5225',
        'name' => 'C#',
       ]);
    }
}
