<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'post_id',
        'content',
        'user_id',
        'is_active',
       
    ];
}
