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
        Schema::create('professional_address', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professional_id');
            $table->string('line1')->nullable();
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('country');
            $table->string('zipcode')->nullable();
            $table->timestamps();            
            $table->foreign('professional_id')->references('id')->on('professionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_addresses');
    }
};
