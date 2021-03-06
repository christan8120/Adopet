<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

//composer dump-autoload
//php artisan db:seed

    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(PetSeeder::class);
         $this->call(ClinicSeeder::class);
    }
}
