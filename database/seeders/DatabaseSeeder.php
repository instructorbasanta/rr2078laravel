<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(100)->create();

//         \App\Models\User::create([
//             'name' => 'Basanta Chapagain',
//             'email' => 'basanta@gmail.com',
//             'password' => Hash::make('basanta')
//         ]);

         Student::create([
             'name' => 'Ramesh Lama',
             'roll_no' => 564,
             'email' => 'info@ramesh.com',
             'address' => 'KTM',
             'temp_address' => 'PKR',
             'passout_key' => 1
         ]);
    }
}
