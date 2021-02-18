<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'content_url' => $this->contentUrl,
            'thumbnail' => $this->thumbnail,
            'date' => $this->date,
            'link' => $this->link,
            'image' => $this->image,
            // TODO: Add the full source information
            //'source' => $this->source->name,
        ];
    }
}
