<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $fillable = ['category_id', 'title', 'summary', 'body', 'banner_url', 'duration'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
