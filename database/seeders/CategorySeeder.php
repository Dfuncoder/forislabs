<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Chemistry']);
        Category::create(['name' => 'Physics']);
        Category::create(['name' => 'Biology']);

        foreach (Category::all() as $category) {
            Category::create([
                'parent_id' => $category->id,
                'name' => 'SS1 ' . $category->name
            ]);
            Category::create([
                'parent_id' => $category->id,
                'name' => 'SS2 ' . $category->name
            ]);
            Category::create([
                'parent_id' => $category->id,
                'name' => 'SS3 ' . $category->name
            ]);
        }
    }
}
