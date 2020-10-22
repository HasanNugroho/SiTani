<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perkebunan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkebunan', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('materi');
            $table->string('subbab');
            $table->string('mentor');
            $table->string('youtube');
            $table->string('ringkasan');
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
        Schema::dropIfExists('perkebunan');
    }
}
