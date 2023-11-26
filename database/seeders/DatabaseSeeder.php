<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriesSeeder::class,
            BannerSeeder::class,
            ProductSeeder::class
        ]);

       User::factory()->create([
           "name" => "polodev",
           "email" => "polodev10@gmail.com",
           "password" => Hash::make("secret2"),
           "is_superuser" => 1,
           "is_staff" => 0
       ]);
    }
}
