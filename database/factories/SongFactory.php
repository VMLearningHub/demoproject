<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=> $this->faker->name(),
            'alubm_id'=> Factory('App\module\Album')->make()->id,
            'artist'=> $this->faker->name(),
            'Metadata'=> $this->faker->address,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
         
        ];
    }
}
