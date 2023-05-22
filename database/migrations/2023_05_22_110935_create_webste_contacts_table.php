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
        Schema::create('webste_contacts', function (Blueprint $table) {
            $table->bigIncrements('wc_id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('subject');
            $table->longText('message');
            $table->integer('wc_status')->default(1);
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
        Schema::dropIfExists('webste_contacts');
    }
};
