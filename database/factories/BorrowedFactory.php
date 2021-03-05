<?php

namespace Database\Factories;

use App\Models\Borrowed;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Borrowed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'equipment_item_id' => \App\Models\EquipmentItem::factory(),
        ];
    }
}
