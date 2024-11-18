<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->integer('tahun_masuk');
            $table->date('tgl_lahir');
            $table->text('alamat')->nullable();
            $table->tinyInteger('is_aktif')->default(0);
            $table->timestamps();
            $table->string('notelp', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
