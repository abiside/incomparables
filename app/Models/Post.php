<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'date',
        'title',
        'link',
        'thumbnail',
        'image',
        'content',
    ];

    protected $casts = [
        'date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->date = Carbon::now();
        });
    }

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
        })->whereNotNull('date');
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

    /**
     * Return the public url for the post
     *
     * @return  string
     */
    public function getPublicUrlAttribute()
    {
        $year = $this->date->format('Y');
        $month = $this->date->format('m');
        $day = $this->date->format('d');

        return url("/noticias/{$year}/{$month}/{$day}/{$this->slug}");
    }

    /**
     * Return the url for the app
     *
     * @return  string
     */
    public function getContentUrlAttribute()
    {
       return $this->publicUrl . "?onlyContent=true";
    }
}
