<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDonBan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = '_h_d_ban';

    protected $fillable = [
        'ngayBan', 'tongTien', 'nhanVien_id', 'khachHang_id'
    ];

    public function chitiethdbans() {
        return $this->hasMany(CTHoaDonBan::class);
    }

    public function nhanviens() {
        return $this->belongsTo(NhanVien::class);
    }

    public function khachhangs() {
        return $this->belongsTo(KhachHang::class);
    }
}
