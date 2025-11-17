<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('helyseg', function (Blueprint $table) {
            $table->integer('az')->primary();
            $table->string('nev');
            $table->string('orszag');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('helyseg');
    }
};