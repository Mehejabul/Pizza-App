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
        Schema::create('pizza_sizes', function (Blueprint $table) {
            $table->bigIncrements('psize_id');
            $table->string('psize_title')->unique();
            $table->string('psize_price')->nullable();
            $table->integer('psize_order')->nullable();
            $table->integer('psize_publish')->default(0);
            $table->integer('psize_creator')->nullable();
            $table->integer('psize_editor')->nullable();
            $table->string('psize_slug')->uniqid();
            $table->integer('psize_status')->default(1);
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
        Schema::dropIfExists('pizza_sizes');
    }
};
