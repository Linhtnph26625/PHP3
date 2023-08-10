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
        Schema::create('chitiet_h_d_ban', function (Blueprint $table) {
            $table->id();
            $table->integer('soLuong')->unique();
            $table->float('donGia', 15, 2);
            $table->float('giamGia', 15, 2);
            $table->float('thanhTien', 15, 2);
            $table->unsignedInteger('hang_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiet_h_d_ban');
    }
};
