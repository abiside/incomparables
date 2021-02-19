<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Post as Model;
use Livewire\Component;
use Illuminate\Http\Request;

class Post extends BasePage
{
    /** @var \App\Models\Post */
    public $post;

    /** @var string */
    public $layout;

    /** @var string */
    public $view;

    public function mount(Request $request, string $year, string $month, string $day, string $slug)
    {
        $date = Carbon::parse("{$year}-{$month}-{$day}");
        $this->layout = 'layouts.app';
        $this->view = 'livewire.post';

        if ($request->onlyContent) {
            $this->layout = 'layouts.base';
            $this->view = 'livewire.post-body';
        }


        $this->post = Model::whereDate('date', $date)
            ->where('slug', $slug)
            ->firstOrFail();

        $this->setMetaData([
            'title' => $this->post->title,
            'description' => $this->post->extract,
            'image' => $this->post->image,
            'url' => $this->post->publicUrl,
            'twitterImage' => $this->post->image,
        ]);
    }

    public function render()
    {
        return view($this->view)
            ->layout($this->layout);
    }
}
