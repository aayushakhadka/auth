<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'asdf@asdf.asdf',
            'password' => bcrypt('admin@123')
        ]);

        $this->call([
            IncomeSeeder::class,
            ExcensesSeeder::class
        ]);
    }
}
