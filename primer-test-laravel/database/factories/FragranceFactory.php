<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fragrance>
 */
class FragranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake()->name(),
            'ranking' => fake()->text(),
            'brand_name' => fake()->name(),
            'is_original' => fake()->text(),
            'status' => fake()->text(),
            'price' => fake()->text(),
            'discount' => fake()->text(),
            'saleend' => '01-01-2022',
            'img_url' => 'https://media.gq.com.mx/photos/6303d35d39ab8ab21d2404c9/3:2/w_3000,h_2000,c_limit/perfume-1006688340.jpg',
        ];
    }
}
