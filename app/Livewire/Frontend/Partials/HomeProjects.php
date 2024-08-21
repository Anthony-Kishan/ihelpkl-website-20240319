<?php

namespace App\Livewire\Frontend\Partials;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomeProjects extends Component
{
    ## Component props
    public string $title;
    public string $subTitle;
    public array $items;
    public string $img;

    /**
     * Create a new component instance.
     * @param array $item 
     * @return void
     */
    public function mount(array $item = []): void
    {
        $this->title = isset($item['title']) ? __($item['title']) : '';
        $this->subTitle = isset($item['subTitle']) ? __($item['subTitle']) : '';
        $this->items = isset($item['items']) ? $item['items'] : [];
        $this->img = isset($item['img']) ? $item['img'] : '';
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.home-projects');
    }
}
