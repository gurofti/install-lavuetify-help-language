<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAracsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aracs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sinif_id');
            $table->foreign('sinif_id')->references('id')->on('arac_sinifis')->onDelete('cascade');
            $table->string('plaka');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aracs');
    }
}
