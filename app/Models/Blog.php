<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'slug',
        'title',
        'thumbnail',
        'description',
        'tags'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
