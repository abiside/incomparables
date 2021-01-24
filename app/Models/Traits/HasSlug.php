<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->name ?? $model->title);
        });
    }

}
