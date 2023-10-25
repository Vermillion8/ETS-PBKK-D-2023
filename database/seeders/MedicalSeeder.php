<?php

namespace Database\Seeders;


use App\Models\Medical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MedicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Medical::create([
        'doctorName' => 'John Doe',
        'patientName' => 'Jane Doe',
        'illness' => Str::random(8),
        'temperature' => Str::random(8),
      ]);
    }
}
