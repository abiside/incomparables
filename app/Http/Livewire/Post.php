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

    public function mount(Request $request, string $year, string $month, string $day, string $slug)
    {
        $date = Carbon::parse("{$year}-{$month}-{$day}");

        $this->post = Model::whereDate('date', $date)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.post');
    }
}