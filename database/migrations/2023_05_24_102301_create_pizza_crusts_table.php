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
        Schema::create('pizza_crusts', function (Blueprint $table) {
            $table->bigIncrements('pcrust_id');
            $table->string('pcrust_title')->unique();
            $table->string('pcrust_price')->nullable();
            $table->integer('pcrust_order')->nullable();
            $table->integer('pcrust_publish')->default(0);
            $table->integer('pcrust_creator')->nullable();
            $table->integer('pcrust_editor')->nullable();
            $table->string('pcrust_slug')->uniqid();
            $table->integer('pcrust_status')->default(1);
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
        Schema::dropIfExists('pizza_crusts');
    }
};
