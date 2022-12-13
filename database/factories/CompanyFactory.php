<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker     = \Faker\Factory ::create ();
        return [
            'name'       => $faker -> company,
            'email'      => $faker -> email,
            'logo'       => $faker -> imageUrl($width=300,$height=300, 'cats', false),
            'website'    => $faker -> domainName,
        ];
    }
}
