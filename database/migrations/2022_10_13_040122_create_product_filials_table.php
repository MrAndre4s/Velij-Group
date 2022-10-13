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
        Schema::create('product_filials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('filial_id')->nullable();
            $table->index('filial_id', 'product_filial_filial_idx');
            $table->foreign('filial_id', 'product_filial_filial_fk')->on('filials')->references('id');

            $table->unsignedBigInteger('product_id')->nullable();
            $table->index('product_id', 'product_filial_product_idx');
            $table->foreign('product_id', 'product_filial_product_fk')->on('products')->references('id');

            $table->unsignedDecimal('price', 12, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_filials');
    }
};
