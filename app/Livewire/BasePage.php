<?php

namespace App\Livewire;

use Livewire\Component;
use stdClass;

class BasePage extends Component
{
    /** @var Object */
    protected $pageMetaData;

    public function __construct()
    {
        $this->pageMetaData = [
            'title' => config('app.name', 'Incomparables.org'),
            'description' => '¡Una comunidad para Tigres de verdad!',
            'image' => asset('images/cover.png'),
            'url' => url('/'),
            'twitterImage' => asset('images/cover.png'),
        ];
    }

    public function getPageMetaProperty()
    {
        return (object) $this->pageMetaData;
    }

    /**
     * Merge the given data with the existing meta data
     *
     * @param  array  $meta
     * @return void
     */
    protected function setMetaData(array $meta): void
    {
        $this->pageMetaData = array_merge($this->pageMetaData, $meta);
    }
}
