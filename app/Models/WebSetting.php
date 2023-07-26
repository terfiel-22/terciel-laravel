<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];
}
