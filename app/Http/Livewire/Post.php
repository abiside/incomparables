<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Post as Model;
use Livewire\Component;
use Illuminate\Http\Request;

class Post extends Component
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
        $this->view = 'livewire.post-body';

        if ($request->onlyContent) {
            $this->layout = 'layouts.base';
            $this->view = 'livewire.post-body';
        }


        $this->post = Model::whereDate('date', $date)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function render()
    {
        //dd($this->layout);
        return view($this->view)->layout($this->layout);
    }
}
