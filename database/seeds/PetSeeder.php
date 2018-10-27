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
            'category_id' => 1,
            'pet_name' => 'doggy',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/dog/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 2,
            'pet_name' => 'catty',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);
    }
}
