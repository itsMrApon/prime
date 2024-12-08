<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\Subcategory;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Update slugs for all services
        Service::all()->each(function ($service) {
            $service->slug = Str::slug($service->name); // Create slug from service name
            $service->save();
        });

        // Update slugs for all subcategories
        Subcategory::all()->each(function ($subcategory) {
            $subcategory->slug = Str::slug($subcategory->name); // Create slug from subcategory name
            $subcategory->save();
        });

        // Optional: If you want to prevent duplicate slugs, you can add checks for uniqueness
    }
}
