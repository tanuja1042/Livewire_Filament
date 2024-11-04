<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CourseList;
use App\Http\Livewire\CourseDetails;
use App\Http\Livewire\LessonViewer;
use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use App\Livewire\ContactForm;
use App\Livewire\ShowPages;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class);


Route::get('/course', CourseList::class)->name('courses');
Route::get('/course/{courseId}', CourseDetails::class)->name('course.details');
Route::get('/lesson/{lessonId}', LessonViewer::class)->name('lesson.view');
Route::get('/services', ServicePage::class)->name('services');
Route::get('/contact', ContactForm::class)->name('contact');
Route::get('/pages/{id}', ShowPages::class)->name('pages');
// Route::get('/course/{courseId}', \App\Http\Livewire\CourseDetails::class)->name('course.details');
// Route::get('/lesson/{lessonId}', \App\Http\Livewire\LessonViewer::class)->name('lesson.view');

