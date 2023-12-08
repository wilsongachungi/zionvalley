<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
// Route::get('/admin.add_image_view', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_member_view', [AdminController::class, 'addview']);
Route::get('/registration_view', [AdminController::class, 'registered']);
Route::post('/upload_members', [AdminController::class, 'upload']);
Route::get('/home_view', [AdminController::class, 'homeview']);
Route::post('appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('message', [HomeController::class, 'message'])->name('message');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('community', [HomeController::class, 'community'])->name('community');
Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('cancel_message/{id}', [HomeController::class, 'cancel_message'])->name('cancel_message');
Route::get('contactzion', [HomeController::class, 'contactzion'])->name('contactzion');
Route::get('accomodation', [HomeController::class, 'accomodation'])->name('accomodation');
Route::get('harambee', [HomeController::class, 'harambee'])->name('harambee');
Route::get('join_membership', [HomeController::class, 'join_membership'])->name('join_membership');
Route::get('join_cbo', [HomeController::class, 'join_cbo'])->name('join_cbo');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('involve', [AdminController::class, 'involve'])->name('involve');
Route::get('contact', [AdminController::class, 'contact'])->name('contact');
Route::get('job_application', [AdminController::class, 'job_application'])->name('job_application');
Route::post('involved', [HomeController::class, 'involved'])->name('involved');
Route::post('job', [HomeController::class, 'job'])->name('job');
Route::post('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/dashboard', [HomeController::class, 'show'])->name('show');
