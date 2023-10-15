<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $statuses = [
        ['name' => 'Pending' ],
        ['name' => 'Accept'],
        ['name' => 'Cancel'],
        ['name' => 'OnCargo'],
        ['name' => 'Delivered'],
        ['name' => 'Returned'],
        ['name' => 'Closed'],
    ];
    public function run(): void
    {
        foreach ($this->statuses as $status) {
            Status::create($status);
        }
    }
}
