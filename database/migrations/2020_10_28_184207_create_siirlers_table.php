<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiirlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siirlers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('sair_id');
            $table->timestamps();

            $table->softDeletes(); // tablonuza deleted_at column ekler
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siirlers');
    }
}
