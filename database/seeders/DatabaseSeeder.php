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
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            RoleSeeder::class,
            CommunityCategorySeeder::class,
            CommunitySeeder::class,
            CitySeeder::class,
            TownshipSeeder::class,
            PageSeeder::class,
            ProductGroupSeeder::class,
            ProductCategorySeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductSeeder::class,
            ProductAttributeValueSeeder::class,
            VariationSeeder::class,
            StatusSeeder::class,
            LogSeeder::class,
        ]);
    }
}
