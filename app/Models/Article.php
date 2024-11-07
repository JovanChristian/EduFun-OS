<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'title', 
        'slug', 
        'content',
        'category_id', 
        'writer_id', 
        'views'
        ];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
