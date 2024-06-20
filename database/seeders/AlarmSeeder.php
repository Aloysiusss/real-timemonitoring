<?php

namespace Database\Seeders;

use App\Models\Alarm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alarm::create([
            'color' => "None",
            'time' => 0,
        ]);
    }
}
