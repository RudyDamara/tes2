<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Berat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berat_pribadi', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->integer('max');
            $table->integer('min');
            $table->integer('perbedaan');
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
        Schema::drop('berat_pribadi');
    }
}
