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
        // //
        // DB::table('pets')->insert([
        //     'category_id' => 4,
        //     'pet_name' => 'rabity',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
            
        //     'gender' => 'Female',
        //     'status' => 0, //0 berarti lom di adopt ama manusia
        //     'picture_src' => "image/pet/rabbit/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 4,
        //     'pet_name' => 'rabito',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/rabbit/1.JPG",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 3,
        //     'pet_name' => 'hamsty',
        //     'userOwner' => 10,
        //     'age' => 3, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/hamster/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        //anjing        
        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Doggo',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akaer',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akaeo',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akaeeo',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akerao',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akererao',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Eraw',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Popo',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);


        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Pipi',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/1.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);


        // DB::table('pets')->insert([
        //     'category_id' => 1,
        //     'pet_name' => 'Akrrao',
        //     'userOwner' => 10,
        //     'age' => 5, //in month
        //     'gender' => 'Male',
        //     'status' => 0,
        //     'picture_src' => "image/pet/dog/2.jpg",
        //     'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
        //     'audit_activity' => 'I',
        // ]);

        //kucing
        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Caety',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Cefde',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/2.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Cearet',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Cadad',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/2.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Ceerte',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Caadfe',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/2.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Ceaea',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/1.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);

        DB::table('pets')->insert([
            'category_id' => 1,
            'pet_name' => 'Caeter',
            'userOwner' => 10,
            'age' => 5, //in month
            'gender' => 'Male',
            'status' => 0,
            'picture_src' => "image/pet/cat/2.jpg",
            'description' => "blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam blam",
            'audit_activity' => 'I',
        ]);


        
    }
}
