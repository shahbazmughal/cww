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


Route::get('/member-spotlight', function () {
    return view('pages.member_spotlight');
})->name('member-spotlight');

Route::get('/inner-circle-magazine', function () {
    return view('pages.inner_circle_magazine');
})->name('inner-circle-magazine');

Route::get('/video-marketing', function () {
    return view('pages.video_marketing');
})->name('video-marketing');

Route::get('/press_releases', function () {
    return view('pages.press_releases');
})->name('press_releases');


Route::get('/press_releases/details', function () {
    return view('pages.press_releases_details');
})->name('press_releases_details');

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

Route::get('/job_posts', function () {
    return view('pages.job_posts');
})->name('job_posts');

Route::get('/job_posts/id', function () {
    return view('pages.job_posts_id');
})->name('job_posts_id');

Route::get('/submit_job', function () {
    return view('pages.submit_job');
})->name('submit_job');

Route::get('/community_posts', function () {
    return view('pages.community_posts');
})->name('community_posts');

Route::get('/community_posts/id', function () {
    return view('pages.community_posts_id');
})->name('community_posts_id');

Route::get('/submit_community', function () {
    return view('pages.submit_community');
})->name('submit_community');

// Route::get('about', 'PagesController@about');