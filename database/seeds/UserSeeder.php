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
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'admin@admin.com',
            'address' => 'Indonesia',
            'gender' => 'Male',
//            'email_verified_at' => Carbon::now()
        ]);

    }
}
