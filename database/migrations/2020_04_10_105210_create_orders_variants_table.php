<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
	        $table->bigInteger('orderId', false, true);
	        $table->bigInteger('variant_id', false, true)->index();
	        $table->integer('quantity', false, true)->default(1);
	        $table->unique(['orderId', 'variant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_variants');
    }
}
