<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->unsignedBigInteger('id_kategori');
            $table->text('deskripsi')->nullable();
            $table->integer('harga');
            $table->integer('stok');
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('tbl_kategori')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_produk');
    }
};