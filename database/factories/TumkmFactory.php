<?php

namespace Database\Factories;

use App\Models\tumkm;
use Illuminate\Database\Eloquent\Factories\Factory;

class TumkmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tumkm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis' => $this->faker->name,
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'kontak' => $this->faker->ean8,
        ];
    }
}
