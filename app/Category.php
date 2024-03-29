<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_id',
    ];

    public function post()
    {
        return $this->hasMany(Post::class, 'cate_id', 'id');
    }
}
