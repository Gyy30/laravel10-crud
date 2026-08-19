<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'John Doe',
                'class' => '10th Grade',
            ],
            [
                'name' => 'Jane Smith',
                'class' => '11th Grade',
            ],
            [
                'name' => 'Michael Johnson',
                'class' => '12th Grade',
            ],
        ]);
    }
}
