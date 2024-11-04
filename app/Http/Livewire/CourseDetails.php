<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseDetails extends Component
{
    public $course;
    public $lessons;

    public function mount($courseId)
    {
        // Fetch the course using the course ID
        $this->course = Course::findOrFail($courseId);
        
        // Load the lessons related to the course
        $this->lessons = $this->course->lessons;
    }

    public function render()
    {
        return view('livewire.course-details', [
            'course' => $this->course,
            'lessons' => $this->lessons,
        ]);
    }
}
