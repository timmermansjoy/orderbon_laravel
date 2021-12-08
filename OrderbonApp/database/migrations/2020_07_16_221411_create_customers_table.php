<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vatid');
            $table->string('exactid');
            $table->string('email');
            $table->string('ceo_first_name');
            $table->string('ceo_last_name');
            $table->string('street');
            $table->string('city');
            $table->string('postal_code');
            $table->char('country', 2);
            $table->string('phonenumber');
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
        Schema::dropIfExists('customers');
    }
}
