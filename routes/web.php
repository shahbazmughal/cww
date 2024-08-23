<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
//use Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');



Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/benefits', function () {
    return view('pages.benefits');
})->name('benefits');

Route::get('/blog_posts', function () {
    return view('blogs.blog_posts');
})->name('blog_posts');

Route::get('/business_blog', function () {
    return view('blogs.business_blog');
})->name('business_blog');

Route::get('/professional_blog', function () {
    return view('blogs.professional_blog');
})->name('professional_blog');

Route::get('/calendar_events', function () {
    return view('pages.calendar_events');
})->name('calendar_events');

Route::get('/submit_events', function () {
    return view('pages.submit_events');
})->name('submit_events');


Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login_page'])->name('login');;
// Route::get('/login', function () {
//     // if (Session::has('user_email')){
//     //     return redirect('/'); 
//     // }
//     return view('pages.login');
// })


Route::get('/member_search', function () {
    return view('pages.member_search');
})->name('member_search');

Route::get('/member_profile', function () {
    return view('pages.member_profile');
})->name('member_profile');

// Route::get('about', 'PagesController@about');