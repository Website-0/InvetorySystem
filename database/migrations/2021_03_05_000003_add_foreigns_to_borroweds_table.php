<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToBorrowedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borroweds', function (Blueprint $table) {
            $table
                ->foreign('equipment_item_id')
                ->references('id')
                ->on('equipment_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borroweds', function (Blueprint $table) {
            $table->dropForeign(['equipment_item_id']);
        });
    }
}
