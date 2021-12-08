<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->index();
            $table->string('reference');
            $table->json('products')->nullable();
            $table->set('type', ['orderbon', 'leverbon']);
            $table->double('KM', 64, 3);
            $table->double('hours', 64, 3);
            $table->longText('images')->nullable();
            $table->string('sign_first_name');
            $table->string('sign_last_name');
            $table->longText('signiture');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('orders');
    }
}
