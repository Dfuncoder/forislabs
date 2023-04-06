<?php

namespace Database\Seeders;
use App\Models\countries;

use Illuminate\Database\Seeder;

class countrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = countries::forceCreate([
            'name' => 'Nigeria',
        ]);
    }
}
