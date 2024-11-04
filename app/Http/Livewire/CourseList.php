<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseList extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.course-list', [
            'courses' => $courses
        ]);
    }
}
