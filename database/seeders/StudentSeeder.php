<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('students')->insert([
            [
                'name' => 'Rahul',
                'email' => 'rahul@example.com',
                'age' => 20,
                'course' => 'PHP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Aman',
                'email' => 'aman@example.com',
                'age' => 22,
                'course' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Priya',
                'email' => 'priya@example.com',
                'age' => 21,
                'course' => 'React',
                'created_at' => now(),
                'updated_at' => now()
            ]
         ]);
    }
}
