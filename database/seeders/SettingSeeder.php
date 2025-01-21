<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $settings = [
            ['keyword' => 'Call Us', 'value' => '+1234567890'],
            ['keyword' => 'Call Us', 'value' => '+9876543210'],
            ['keyword' => 'Email', 'value' => 'admin@dizams.com'],
            ['keyword' => 'Office', 'value' => '11-B Shanti Nagar, Maholi Road, Mathura 281001'],
            ['keyword' => 'Office', 'value' => 'Sector 62, Noida 201309'],
            ['keyword' => 'Office', 'value' => 'Bentonville, A, USA 72712'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
