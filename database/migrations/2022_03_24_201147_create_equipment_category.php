<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('HardwareSpecs');
            $table->integer('PurchaseInvoice');
            $table->double('Price',20,2);
            $table->enum('category', ['desktop','laptop','phone']);
            $table->DateTime('PurchaseDate');
            //$table->foreignId('manufacurer_id')->constrained('manufacurers')->onDelete('cascade');;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
