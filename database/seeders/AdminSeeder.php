<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"Admin",
            'email'=>'admin@admin.com',
            'user_name'=>'admin',
            'mobile_number'=>'8408806731',
            'password'=>Hash::make('123456789')
        ]);
    }
}
