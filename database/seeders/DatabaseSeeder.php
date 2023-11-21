<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\DataLaptop::create(
            [
            "nama" => "Asus ROG Zephyrus G14",
            "brand" => "Asus",
            "harga" => "30000000",
            ],);

        // \App\Models\Pelanggan::where('id', 2)->update(
        //     [
        //         "nama" => "Danish Raja Java"
        //     ]);

        // \App\Models\Pelanggan::destroy(1);
    }
}
