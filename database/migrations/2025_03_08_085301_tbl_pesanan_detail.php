<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_pesanan_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan');
            $table->unsignedBigInteger('id_produk');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->timestamps();

            $table->foreign('id_pesanan')->references('id')->on('tbl_pesanan')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('tbl_produk')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_pesanan_detail');
    }
};