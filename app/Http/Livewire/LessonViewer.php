<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lesson;

class LessonViewer extends Component
{
    public $lesson;

    public function mount($lessonId)
    {
        // Load the lesson by ID
        $this->lesson = Lesson::findOrFail($lessonId);
    }

    public function render()
    {
        return view('livewire.lesson-viewer', ['lesson' => $this->lesson]);
    }
}
