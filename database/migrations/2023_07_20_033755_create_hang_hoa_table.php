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
        Schema::create('hang_hoa', function (Blueprint $table) {
            $table->id();
            $table->string('tenHangHoa')->unique();
            $table->integer('soLuong')->unique();
            $table->float('donGiaNhap', 15, 2);
            $table->float('donGiaBan', 15, 2);
            $table->string('anh')->nullable();
            $table->string('ghiChu')->nullable();
            $table->unsignedInteger('chatlieu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hang_hoa');
    }
};
