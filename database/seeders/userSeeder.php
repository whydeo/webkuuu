<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'deo@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => \Carbon\Carbon::now(),
                'email_verified_at' => \Carbon\Carbon::now()
            ]);
            DB::table('users')->insert([
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'created_at' => \Carbon\Carbon::now(),
                'email_verified_at' => \Carbon\Carbon::now()
            ]);
            DB::table('users')->insert([
                'name' => 'walikelas',
                'email' => 'walikelas@gmail.com',
                'password' => Hash::make('walikelas123'),
                'role' => 'walikelas',
                'created_at' => \Carbon\Carbon::now(),
                'email_verified_at' => \Carbon\Carbon::now()
            ]);
        
    }
}
