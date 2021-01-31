<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        return view('livewire.posts');
    }

    public function getPostsProperty()
    {
        return Post::active()
            ->orderBy('date', 'DESC')
            ->paginate();
    }
}
