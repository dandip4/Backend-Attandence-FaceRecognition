<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com','password' => Hash::make('admin123'),'phone' => '08952124445','created_at' => now(), 'updated_at' => now()],
        ]);

















        // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. Dandip',
            'email' => 'official@dandip.com',
            'address' => 'Jl. Jalan jalan',
            'latitude' => '-6.5993931',
            'longitude' => '106.8097919',
            'radius_km' => '1',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            // PermissionSeeder::class,
        ]);
    }
}
