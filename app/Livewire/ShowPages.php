<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPages extends Component
{
    public $id = null;

    public function mount($id)
    {
        // Fetch the course using the course ID
        $this->pageId = $id;
        
        // Load the lessons related to the course
        // $this->lessons = $this->course->lessons;
    }
    public function render()
    {
        $pages = Page::findOrFail($this->pageId);
        return view('livewire.show-pages',[
            'pageData' => $pages
        ]);
    }
}
