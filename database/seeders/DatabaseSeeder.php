<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bill;
use App\Models\User;
use App\Models\Wallet;
use App\Models\BillType;
use App\Models\Beneficiaries;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Sakti',
            'username' => 'sakti',
            'email' => 'sakti@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(4)->create();
        Wallet::factory(5)->create();
        BillType::factory(5)->create();
        Bill::factory(5)->create();
        Beneficiaries::factory(5)->create();
    }
}
