<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HangHoa extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'hang_hoa';

    protected $fillable = [
        'tenhangHoa', 'soLuong', 'donGiaNhap', 'donGiaBan', 'anh', 'ghiChu', 'chatlieu_id'
    ];

    public function chatlieus() {
        return $this->belongsTo(ChatLieu::class);
    }
}
