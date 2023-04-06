<?php

namespace Database\Seeders;
use App\Models\states;
use Illuminate\Database\Seeder;

class statesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = [
            ['name' => 'Abuja FCT'],
            ['name' => 'Abia State'],
            ['name' => 'Adamawa State'],
            ['name' => 'Akwa Ibom State'],
            ['name' => 'Anambra State'],
            ['name' => 'Bauchi State'],
            ['name' => 'Bayelsa State'],
            ['name' => 'Benue State'],
            ['name' => 'Borno State'],
            ['name' => 'Cross River State'],
            ['name' => 'Delta State'],
            ['name' => 'Ebonyi State'],
            ['name' => 'Edo State'],
            ['name' => 'Ekiti State'],
            ['name' => 'Enugu State'],
            ['name' => 'Gombe State'],
            ['name' => 'Imo State'],
            ['name' => 'Jigawa State'],
            ['name' => 'Kaduna State'],
            ['name' => 'Kano State'],
            ['name' => 'Katsina State'],
            ['name' => 'Kebbi State'],
            ['name' => 'Kogi State'],
            ['name' => 'Kwara State'],
            ['name' => 'Lagos State'],
            ['name' => 'Nasarawa State'],
            ['name' => 'Niger State'],
            ['name' => 'Ogun State'],
            ['name' => 'Ondo State'],
            ['name' => 'Osun State'],
            ['name' => 'Oyo State'],
            ['name' => 'Plateau State'],
            ['name' => 'Rivers State'],
            ['name' => 'Sokoto State'],
            ['name' => 'Taraba State'],
            ['name' => 'Yobe State'],
            ['name' => 'Zamfara State'],
            
        ];

    foreach ($states as $key => $states) {
        states::create($states);
    }
    }
}
