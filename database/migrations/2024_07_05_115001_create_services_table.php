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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('name');
            $table->string('type');
            $table->bigInteger('jap_rate');
            $table->bigInteger('rate');
            $table->integer('min');
            $table->integer('max');
            $table->boolean('dripfeed');
            $table->boolean('refill');
            $table->boolean('cancel');
            $table->foreignId('category_id');
            $table->boolean('show')->default(true);
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
        Schema::dropIfExists('services');
    }
};
