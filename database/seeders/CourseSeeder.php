<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("course")->insert([
            'course_name'=> 'BSCS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table("course")->insert([
            'course_name'=> 'BSIT',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
