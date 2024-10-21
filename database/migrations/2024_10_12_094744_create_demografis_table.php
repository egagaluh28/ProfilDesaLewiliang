<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemografisTable extends Migration
{
    public function up()
    {
        Schema::create('demografis', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('judul'); // Kolom untuk judul
            $table->text('konten'); // Kolom untuk konten
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('demografis');
    }
}

