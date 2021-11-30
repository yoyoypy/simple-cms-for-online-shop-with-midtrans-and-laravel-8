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

    /**
     * Get the user that owns the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function authors()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
