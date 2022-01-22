<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo_text',
        'logo_location',
        'fav_location',
        'language',
        'fav_name',
        'logo_name',
    ];
}
