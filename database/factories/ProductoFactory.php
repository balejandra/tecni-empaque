<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'marca' => $this->faker->word,
        'foto_principal' => $this->faker->word,
        'foto_2' => $this->faker->word,
        'foto_3' => $this->faker->word,
        'categoria_id' => $this->faker->word
        ];
    }
}
