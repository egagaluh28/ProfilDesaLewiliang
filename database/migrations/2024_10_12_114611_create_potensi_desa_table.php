<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiDesaTable extends Migration
{
    public function up()
    {
        Schema::create('potensi_desa', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); // Image URL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('potensi_desa');
    }
}

