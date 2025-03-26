<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaravelInfo;

class LaravelInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        LaravelInfo::create([
            'feature_name' => 'Model',
            'description' => 'Represents database table and allows user to interact in object-oriented way.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'View',
            'description' => 'Displays data through HTML templates.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Controller',
            'description' => 'Manages Model and View logic.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Routes',
            'description' => 'Defines URLs and directs user accordingly.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Middleware',
            'description' => 'Filters HTTP request allowing authentication or/and logging in.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Blade Templates',
            'description' => 'Template engine for creating dynamic views.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Migrations',
            'description' => 'Version control for database schema.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Seeders',
            'description' => 'Populates database with initial data.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Database',
            'description' => 'Unified interface for database interaction and storage for data.',
        ]);

        LaravelInfo::create([
            'feature_name' => 'Eloquent ORM',
            'description' => 'ActiveRecord implementation for working with database.',
        ]);
    }
}