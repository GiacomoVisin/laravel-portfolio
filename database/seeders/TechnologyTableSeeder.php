<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Bootstrap',
                'description' => 'A free and open-source front-end framework for designing websites and web applications.'
            ],
            [
                'name' => 'React',
                'description' => 'A JavaScript library for building user interfaces.'
            ],
            [
                'name' => 'Node',
                'description' => 'A JavaScript runtime built on Chrome\'s V8 engine.'
            ],
            [
                'name' => 'Vite',
                'description' => 'A modern frontend build tool that provides a fast development environment.'
            ],
            [
                'name' => 'VisualStudio',
                'description' => 'An integrated development environment (IDE) from Microsoft.'
            ]
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();

            $newTechnology->name = $technology['name'];
            $newTechnology->description = $technology['description']; 

            $newTechnology->save();
        }
    }
}