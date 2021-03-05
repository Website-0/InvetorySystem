<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\EquipmentItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EquipmentItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'controlnumber' => $this->faker->randomNumber(0),
            'categoryname' => $this->faker->text(255),
            'brand' => $this->faker->text(255),
            'model' => $this->faker->text(255),
            'location' => $this->faker->text(255),
            'purchaseprice' => $this->faker->randomNumber(0),
            'yearofpurchase' => $this->faker->date,
            'retiredate' => $this->faker->date,
            'remarks' => $this->faker->text(255),
            'accesories' => $this->faker->text(255),
        ];
    }
}
