<?php

namespace Database\Seeders;

use App\Models\EquipmentItem;
use Illuminate\Database\Seeder;

class EquipmentItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EquipmentItem::factory()
            ->count(5)
            ->create();
    }
}
