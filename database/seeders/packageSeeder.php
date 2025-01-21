<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ResumePackage;
use Illuminate\Database\Seeder;

class packageSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        ResumePackage::create([
            'title' => 'Only 1 Resume',
            'resume_count' => 1,
            'original_price' => 20.00,
            'discounted_price' => 10.00,
            'per_resume_price' => 10.00,
            'modal_type' => 'single',
        ]);

        ResumePackage::create([
            'title' => '12 Resumes in a bulk',
            'resume_count' => 12,
            'original_price' => 200.00,
            'discounted_price' => 100.00,
            'per_resume_price' => 8.30,
            'modal_type' => 'bulk12',
        ]);

        ResumePackage::create([
            'title' => '35 Resumes in a bulk',
            'resume_count' => 35,
            'original_price' => 500.00,
            'discounted_price' => 250.00,
            'per_resume_price' => 7.10,
            'modal_type' => 'bulk35',
        ]);
    }
}