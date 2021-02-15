<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostSourceFeed;

class PostSource extends Model
{
    use HasFactory,
        HasSlug;

    protected $casts = [
        'active' => 'boolean',
    ];

    public function feeds()
    {
        return $this->hasMany(PostSourceFeed::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function getThumbAttribute()
    {
        return asset("/images/sources/{$this->slug}.jpg");
    }
}
