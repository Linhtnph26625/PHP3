<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CTHoaDonBan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'chitiet_h_d_ban';

    protected $fillable = [
        'soLuong', 'donGia', 'giamGia', 'thanhTien', 'hang_id'
    ];

    public function hanghoas() {
        return $this->belongsTo(HangHoa::class);
    }
}
