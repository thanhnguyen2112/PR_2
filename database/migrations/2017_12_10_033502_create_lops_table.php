<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('malop',10)->unique();
            $table->string('tenlop');
            $table->integer('khoas_id')->unsigned();
            $table->foreign('khoas_id')->references('id')->on('khoas')->onDelete('cascade');
            $table->integer('nganhs_id')->unsigned();
            $table->foreign('nganhs_id')->references('id')->on('nganhs')->onDelete('cascade');
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
        Schema::dropIfExists('lops');
    }
}
