<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $logs = [
        ['name' => 'change_the_status' ],
        ['name' => 'add_delivery_note'],
        ['name' => 'update_delivery_note'],
    ];
    public function run(): void
    {
        foreach ($this->logs as $log) {
            Log::create($log);
        }
    }
}
