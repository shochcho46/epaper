<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pic_name',
        'pic_location',
        'showdate',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
