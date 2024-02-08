<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'author_name', 'content'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
