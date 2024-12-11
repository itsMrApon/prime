<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // Create INC Insurance 
        Service::create([
            'name' => 'INC Services',
            'description' => 'Streamlined INC formation and business services.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create TLC Insurance 
        Service::create([
            'name' => 'TLC Insurance',
            'description' => 'Affordable and reliable TLC insurance solutions.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Create TLC Services
        Service::create([
            'name' => 'TLC Services',
            'description' => 'Hassle-free TLC licensing and support services.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create DMV Service
        Service::create([
            'name' => 'DMV Services',
            'description' => 'Fast and reliable DMV services at your convenience.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // Create Tax files
        Service::create([
            'name' => 'Tax files',
            'description' => 'Secure and simplify your tax filing with our trusted services.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create Courses
        Service::create([
            'name' => 'Courses and Other',
            'description' => 'Learn new skills and grow your carriar with our courses and services.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
