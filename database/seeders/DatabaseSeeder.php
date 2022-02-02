<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(20)->create();
        Brand::factory(50)->create();
        Category::factory(50)->create();
        Item::factory(50)->create();
        User::create([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'email_verified_at' => now(),
           'password' => Hash::make('password'),
           'remember_token' => Str::random(10),
           'role' => '1'
        ]);
    }
}
