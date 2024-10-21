<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejarahDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarah_desas', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul sejarah desa
            $table->text('konten'); // Konten sejarah desa
            $table->string('gambar')->nullable(); // URL gambar (opsional)
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarah_desas');
    }
}
