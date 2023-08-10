<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatLieu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'chatlieu';

    protected $fillable = [
        'tenChatLieu'
    ];

    public function hanghoas() {
        return $this->hasMany(HangHoa::class);
    }

}
