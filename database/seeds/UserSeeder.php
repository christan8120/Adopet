<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name' => 'admin',
            // 'password' => Hash::make('admin'),
            'password' => 'admin',
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->address,
            'gender' => 'Male',
//            'email_verified_at' => Carbon::now()
        ]);

    }
}
