<?php

namespace Algowrite\LaravelHelpCenter\Database\Factories;

use Algowrite\LaravelHelpCenter\Models\LaravelHelpCenterModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaravelHelpCenterFactory extends Factory
{
    protected $model = LaravelHelpCenterModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}