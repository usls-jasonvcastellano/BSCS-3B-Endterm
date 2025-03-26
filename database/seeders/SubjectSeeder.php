<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = DB::table("course")->get();

        foreach ($courses as $course ) {
            for ($i=0; $i < 5 ; $i++) {
                DB::table("subject")->insert([
                    'course_id' => $course->id,
                    'name' => fake()->countryCode,
                    'description' => fake()->country,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        
        
    }
}
