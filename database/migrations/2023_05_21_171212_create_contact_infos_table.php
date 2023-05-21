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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->bigIncrements('cont_id');
            $table->string('cont_phone1',100)->nullable();
            $table->string('cont_phone2',100)->nullable();
            $table->string('cont_phone3',100)->nullable();
            $table->string('cont_phone4',100)->nullable();
            $table->string('cont_email1',100)->nullable();
            $table->string('cont_email2',100)->nullable();
            $table->string('cont_email3',100)->nullable();
            $table->string('cont_email4',100)->nullable();
            $table->string('cont_address1',100)->nullable();
            $table->string('cont_address2',100)->nullable();
            $table->string('cont_address3',100)->nullable();
            $table->string('cont_address4',100)->nullable();
            $table->integer('cont_status')->default(1);
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
        Schema::dropIfExists('contact_infos');
    }
};
