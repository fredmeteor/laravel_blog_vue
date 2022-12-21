<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_fr','title_en','body_fr','body_en',
        'photo','category_id','admin_id','slug',
        'published','premium'
    ];
}
