<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('controlnumber');
            $table->string('categoryname');
            $table->string('brand');
            $table->string('model');
            $table->string('location');
            $table->integer('purchaseprice');
            $table->date('yearofpurchase');
            $table->date('retiredate')->nullable();
            $table->string('remarks');
            $table->string('accesories');
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_items');
    }
}
