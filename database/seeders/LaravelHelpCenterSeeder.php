<?php

namespace Algowrite\TestPackage\Database\Seeders;

use Algowrite\LaravelHelpCenter\Models\LaravelHelpCenterModel;
use Illuminate\Database\Seeder;

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