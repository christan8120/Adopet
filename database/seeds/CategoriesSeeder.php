<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'category_name' => 'Cat',
            'audit_activity' => 'I',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Dog',
            'audit_activity' => 'I',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Hamster',
            'audit_activity' => 'I',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Rabbit',
            'audit_activity' => 'I',
        ]);
    }
}
