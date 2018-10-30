<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pets')->insert([
            'category_id' => 4,
            'pet_name' => 'rabity',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Female',
            'status' => 0,
            'picture_src' => "image/pet/rabbit/2.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 4,
            'pet_name' => 'rabito',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/rabbit/1.JPG",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 3,
            'pet_name' => 'hamsty',
            'userOwner' => 10,
            'age' => 3, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/hamster/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);
    }
}
