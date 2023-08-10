<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanVien extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = 'nhanvien';

    protected $fillable = [
        'tenNhanVien',
        'gioiTinh',
        'diaChi',
        'dienThoai',
        'ngaySinh'
    ];

    public function hoadonbans() {
        return $this->hasMany(HoaDonBan::class);
    }
}
