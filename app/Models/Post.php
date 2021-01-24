<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(PostSource::class);
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
}
