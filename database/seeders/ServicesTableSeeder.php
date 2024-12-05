<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // Create INC Insurance Service
        Service::create([
            'name' => 'INC Services',
            'description' => 'Our auto insurance offers affordable coverages to protect you and your ride through the road ahead.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Create TLC Insurance Service
        Service::create([
            'name' => 'TLC Services',
            'description' => 'Our auto insurance offers affordable coverages to protect you and your ride through the road ahead.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
