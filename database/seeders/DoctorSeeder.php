<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'name' => 'Dr. John Doe',
            'ssn' => '123-45-6789',
            'dob' => '1990-01-01',
            'phone' => '123-456-7890',
            'specialty' => 'General Practitioner'
        ]);
    }
}
