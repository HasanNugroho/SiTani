<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pertanian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanian', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('materi');
            $table->string('judul');
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
        Schema::dropIfExists('pertanian');
    }
}
