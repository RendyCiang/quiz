<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'writer_id',
        'category',
        'image',
        'published_at',
    ];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

}
