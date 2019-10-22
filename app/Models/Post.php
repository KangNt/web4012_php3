<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'content',
        'category_id',
        'user_id',
       
    ];


    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
}
