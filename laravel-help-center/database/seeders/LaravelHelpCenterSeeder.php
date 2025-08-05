<?php

namespace YourVendor\TestPackage\Database\Seeders;

use Algowrite\LaravelHelpCenter\Models\LaravelHelpCenterModel;
use Illuminate\Database\Seeder;
use YourVendor\TestPackage\Models\TestModel;

class LaravelHelpCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaravelHelpCenterModel::factory()->count(10)->create();
    }
}