<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Symfony\Contracts\Service\ServiceSubscriberInterface;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call([
            ServicesTableSeeder::class,
            SubcategoriesTableSeeder::class,
        ]);
    }
}
