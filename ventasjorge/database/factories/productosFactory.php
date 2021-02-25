<?php

namespace Database\Factories;

use App\Models\productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class productosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_productos' => $this->faker->randomDigitNotNull,
        'nombre' => $this->faker->word,
        'categorias_id' => $this->faker->randomDigitNotNull,
        'precio' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
