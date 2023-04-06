<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'summary', 'body', 'image_url', 'featured', 'published_at'];

    public $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean'
    ];

    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('parent_id', null)->with('children');
    }
}
