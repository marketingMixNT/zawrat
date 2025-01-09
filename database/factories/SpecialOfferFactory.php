<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SpecialOffer;

class SpecialOfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpecialOffer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_description' => '{}',
            'title' => '{}',
            'slug' => '{}',
            'thumbnail' => $this->faker->text(),
            'price' => $this->faker->numberBetween(-10000, 10000),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'short_description' => '{}',
            'content' => '{}',
            'link' => $this->faker->text(),
        ];
    }
}
