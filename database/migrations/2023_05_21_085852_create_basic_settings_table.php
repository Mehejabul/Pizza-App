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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->bigIncrements('bs_id');
            $table->string('bs_company',100)->nullable();
            $table->string('bs_url',100)->nullable();
            $table->string('bs_title',100)->nullable();
            $table->string('bs_logo',100)->nullable();
            $table->string('bs_fabicon',100)->nullable();
            $table->string('bs_flogo',100)->nullable();
            $table->integer('bs_status')->default(1);
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
        Schema::dropIfExists('basic_settings');
    }
};
