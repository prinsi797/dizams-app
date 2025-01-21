<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobOpening;

class JobSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        JobOpening::create([
            'title' => 'Ophthalmologist - Glaucoma Or Comprehensive',
            'location' => 'Hyattsville, Maryland',
            'job_type' => 'Full Time',
            'category' => 'Physicians/Surgeons',
            'description' => 'Our client is seeking a comprehensive, board certified, or board-eligible Ophthalmologist with a fellowship training...',
            'requirements' => json_encode([
                'Fellowship Trained',
                'Board Certified in Ophthalmology',
                'Hold state Licensure in Maryland'
            ]),
            'benefits' => json_encode([
                'Competitive Salary Package',
                'Paid Time Off',
                'Health & Dental Benefits',
                '401K Match',
                'Employee and Family Discounts'
            ]),
            'responsibilities' => "- Provide comprehensive eye care services\n- Diagnose and treat various eye conditions\n- Perform surgical procedures when necessary\n- Maintain accurate patient records\n- Collaborate with other healthcare professionals\n- Participate in continuing education and stay current with medical advances",
            'is_active' => true,
        ]);
    }
}