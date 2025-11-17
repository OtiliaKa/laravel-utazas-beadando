<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('szalloda', function (Blueprint $table) {
            $table->string('az', 10)->primary();
            $table->string('nev');
            $table->integer('besorolas');
            $table->integer('helyseg_az');
            $table->integer('tengerpart_tav')->nullable();
            $table->integer('repter_tav')->nullable();
            $table->boolean('felpanzio')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('szalloda');
    }
};