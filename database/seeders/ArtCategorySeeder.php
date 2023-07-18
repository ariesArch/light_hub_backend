<?php

namespace Database\Seeders;

use App\Models\ArtCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArtCategory::create([
            'name'=>'One',
            'description'=>'One'

        ]);
        ArtCategory::create([
            'name'=>'Two',
            'description'=>'Two'

        ]);
    }
}
