<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhachHang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tenKhachHang',
        'diaChi',
        'ngaySinh',
        'avatar'
    ];

    public function hoadonbans() {
        return $this->hasMany(HoaDonBan::class);
    }
}
