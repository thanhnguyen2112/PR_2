<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masv',10)->unique();
            $table->string('hotensv');
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->text('quequan');
            $table->integer('nganhs_id')->unsigned();
            $table->foreign('nganhs_id')->references('id')->on('nganhs')->onDelete('cascade');
            $table->integer('khoas_id')->unsigned();
            $table->foreign('khoas_id')->references('id')->on('khoas')->onDelete('cascade');
            $table->integer('lops_id')->unsigned();
            $table->foreign('lops_id')->references('id')->on('lops')->onDelete('cascade');
            
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
        Schema::dropIfExists('sinhviens');
    }
}
