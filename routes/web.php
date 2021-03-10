<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/my-courses', [App\Http\Controllers\HomeController::class, 'MyCourses'])->name('my-courses');
    Route::get('/show/{id}', [App\Http\Controllers\CoursesController::class, 'show'])->name('show');
    Route::get('/all-courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('all-courses');
    Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'myProfile'])->name('my-profile');
    Route::get('/edit-profile/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit-profile');
    Route::patch('/edit-profile/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('edit-profile.update');
    Route::get('/mails', [App\Http\Controllers\CoursesController::class, 'mail'])->name('mail.trap');
    Route::get('FAQ', function(){
        return view('FAQ');
    })->name('faq');
    Route::get('/courses/{id}', [App\Http\Controllers\CoursesController::class, 'courseContent'])->name('course.content');
    Route::get('/courses/buy/{id}', [App\Http\Controllers\CoursesController::class, 'courseBuy'])->name('course.buy');
    Route::post('/courses/bought', [App\Http\Controllers\CoursesController::class, 'courseStore'])->name('course.bought');
    Route::post('/courses/require', [App\Http\Controllers\CoursesController::class, 'courseRequire'])->name('course.require');
    Route::get('/plan/{id}', [App\Http\Controllers\PlanController::class, 'show'])->name('plans.show');
    Route::post('/subscription', [App\Http\Controllers\SubscriptionController::class, 'create'])->name('subscription.create');

    Route::get('create/plan', [App\Http\Controllers\SubscriptionController::class, 'createPlan'])->name('create.plan');
    Route::post('store/plan', [App\Http\Controllers\SubscriptionController::class, 'storePlan'])->name('store.plan');
});

Route::group(['prefix' => 'admin'], function () {
    Route::middleware(["admin.user"])->group(function (){
        Route::get('/create-course', [App\Http\Controllers\CoursesController::class, 'create'])->name('courses.create');
        Route::post('/create-course', [App\Http\Controllers\CoursesController::class, 'store'])->name('course.store');
        Route::put('/course/update/{id}', [App\Http\Controllers\CoursesController::class, 'update'])->name('course.update');
        Route::get('/course/edit/{id}', [App\Http\Controllers\CoursesController::class, 'edit'])->name('course.edit');
    });
    Voyager::routes();
});
