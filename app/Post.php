<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'cate_id'
    ];

    public function category()
    {
        return $this->belongsTo( Category::class, 'id', 'cate_id');
    }
}
