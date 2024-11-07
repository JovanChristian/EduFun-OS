<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table = 'writers';

    protected $fillable = [
        'name',
        'email',
        'bio', 
        'image'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}