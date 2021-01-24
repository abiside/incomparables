<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'link',
        'thumbnail',
        'image',
        'content',
    ];

    public function source()
    {
        return $this->belongsTo(PostSource::class, 'post_source_id');
    }

    /**
     * Get the scope for the active posts
     *
     * @param  Illuminate\Database\Eloquent\Builder  $query
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive(Builder $query)
    {
        return $query->whereHas('source', function($query) {
            return $query->active();
        });
    }

    /**
     * Return if the given link is missing on the posts table
     *
     * @param  string  $link
     * @return bool
     */
    public static function getIsMissingByLink(string $link): bool
    {
        return (self::where('link', $link)->get())->isEmpty();
    }

    /**
     * Return the exctract from the full post contet
     *
     * @return string
     */
    public function getExtractAttribute()
    {
        return strip_tags(substr($this->content, 0, 255));
    }
}
