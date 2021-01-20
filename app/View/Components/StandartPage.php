<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class StandartPage extends Component
{
    /**
     * Create a new.jpg component instance.
     *
     * @return void
     */

    public $article;
    public $section;
    public function __construct($section)
    {
        $this->article = Article::firstWhere('section', $section);
        $this->section = $section;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.standart-page');
    }
}
