<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_keranjang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_produk');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('tbl_user')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('tbl_produk')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_keranjang');
    }
};