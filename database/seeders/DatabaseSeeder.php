<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            ServicesSeeder::class,
            PageSeeder::class,
            ItemTypeSeeder::class,
            PostSeeder::class,
            PluginSeeder::class,
            FamilySeeder::class,
            AchievementSeeder::class,
            StarSeeder::class,
            TeammateSeeder::class,
            MenuItemSeeder::class,
            PageItemSeeder::class,
            TestimonialSeeder::class,
            WorkSeeder::class,
            ContactSeeder::class,
        ]);
    }
}
