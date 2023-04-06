<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Simulation;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SimulationSeeder extends Seeder
{
    protected $categories;
    protected $faker;

    public function __construct() {
        $this->categories = Category::query()->where('parent_id', '!=', null)->get();
        $this->faker = Factory::create();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->categories->each(function($category){
            for ($i=0; $i < 3; $i++) { 
                Simulation::create([
                    'category_id' => $category->id, 
                    'title' => $this->faker->realText(25), 
                    'summary' => $this->faker->realText(120), 
                    'body' => $this->faker->realText(500), 
                    'banner_url' => 'https://dummyimage.com/720x400', 
                    'duration' => $this->faker->numberBetween(30, 60)
                ]);
            }
        });
    }
}
