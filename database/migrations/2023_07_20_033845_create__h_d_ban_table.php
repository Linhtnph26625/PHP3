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
        Schema::create('_h_d_ban', function (Blueprint $table) {
            $table->id();
            $table->string('ngayBan');
            $table->float('tongTien', 15, 2);
            $table->unsignedInteger('nhanVien_id');
            $table->unsignedInteger('khachHang_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_h_d_ban');
    }
};
