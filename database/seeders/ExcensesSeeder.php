<?php

namespace Database\Seeders;

use App\Models\Excenses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExcensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excenses::create([
            'amount' => 500,
            'remarks' => 'Chocolate',
            'user_id' => 1
        ]);
    }
}
