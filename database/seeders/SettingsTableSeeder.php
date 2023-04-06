<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = json_encode([
            'Offline Available Laboratory',
            'Affordable and Effective Laboratory',
            'Designed just like in games',
            'Aligned with the National School curriculum',
            'Intuitive and Free Laboratory'
        ]);

        $settings = [
            ['key' => 'intro_paragraph', 'value' => '<p>Foris Labs is an app-based platform designed to introduce a safe and interactive laboratory environment for students by creating a virtual learning space that allows students to conduct science experiments individually and in groups interactively via their mobile phones. </p><p?>It is developed with well-tailored laboratory experiments for various classes according to the West African educational curriculum. Our unique aim is to make practical sessions accessible for students in a fun and engaging way </p>'],
            ['key' => 'vision', 'value' => "To be Africa's most user-centric virtual science laboratory brand promoting science learning and sparking ground-breaking science discoveries from Africa."],
            ['key' => 'mission', 'value' => "Promoting science engagement and intergenerational learning by providing the most up-to-date, curriculum based, and personalized laboratory platform for people of all ages."],
            ['key' => 'features', 'value' => $features],
            ['key' => 'email', 'value' => 'helpdesk@forislabs.com'],
            ['key' => 'phone_number', 'value' => '090345636464'],
            ['key' => 'facebook', 'value' => 'Foris Labs'],
            ['key' => 'instagram', 'value' => 'Foris Labs'],
            ['key' => 'twitter', 'value' => 'forislabs'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
