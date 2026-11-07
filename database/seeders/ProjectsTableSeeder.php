<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 1; $i <= 8; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->word;
            $newProject->customer = $faker->name;
            $newProject->period = $faker->date;
            $newProject->summary = $faker->sentence(5);
            $newProject->category =$faker->word;

            $newProject->save();
        }
    }
}