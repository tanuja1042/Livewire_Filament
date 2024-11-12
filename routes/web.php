<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CourseList;
use App\Http\Livewire\CourseDetails;
use App\Http\Livewire\LessonViewer;
use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use App\Livewire\ContactForm;
use App\Livewire\ShowPages;
use App\Livewire\CategoriesPage;
use App\Livewire\ProductPage;
use App\Livewire\CartPage;
use App\Livewire\ProductDetailsPage;
use App\Livewire\CheckoutPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\SuccessPage;
use App\Livewire\CancelPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\ResetPasswordPage;


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
Route::get('/categories', CategoriesPage::class)->name('category');
Route::get('/products', ProductPage::class)->name('product');
Route::get('/cart', CartPage::class)->name('cart');
Route::get('/products/{slug}', ProductDetailsPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', MyOrderDetailPage::class);


Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot', ForgotPasswordPage::class);
Route::get('/reset', ResetPasswordPage::class);


Route::get('/success', SuccessPage::class);
Route::get('/cancel', CancelPage::class);

