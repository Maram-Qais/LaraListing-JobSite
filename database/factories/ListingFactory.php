<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Listing;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{

    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' =>'laraevl, api, backend',
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'email' => $this->faker->safeEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),

            //
        ];
    }
}