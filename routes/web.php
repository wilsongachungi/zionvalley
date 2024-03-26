<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ViewController;
use App\Models\Message;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('index');
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
Route::get('community', [HomeController::class, 'community'])->name('community');
Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('cancel_message/{id}', [HomeController::class, 'cancel_message'])->name('cancel_message');
Route::get('contactzion', [HomeController::class, 'contactzion'])->name('contactzion');
Route::get('accomodation', [HomeController::class, 'accomodation'])->name('accomodation');
Route::get('harambee', [HomeController::class, 'harambee'])->name('harambee');
Route::get('join_membership', [HomeController::class, 'join_membership'])->name('join_membership');
Route::get('join_cbo', [HomeController::class, 'join_cbo'])->name('join_cbo');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('/involve', [AdminController::class, 'involve'])->name('involve');
Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
Route::get('/job_application', [AdminController::class, 'job_application'])->name('job_application');
Route::post('/involved', [HomeController::class, 'involved'])->name('involved');
Route::post('/job', [HomeController::class, 'job'])->name('job');
Route::post('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/dashboard', [HomeController::class, 'show'])->name('show');
Route::get('/list', [TaskController::class, 'list'])->name('list');
Route::get('/see_list', [TaskController::class, 'see_list'])->name('see_list');
Route::post('/storeTask', [TaskController::class, 'storeTask'])->name('storeTask');
Route::get('/task', [TaskController::class, 'task'])->name('task');
Route::get('/account', [AccountController::class, 'account'])->name('account');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::get('/info', [AccountController::class, 'info'])->name('info');
Route::get('/credit_harambee', [AccountController::class, 'credit_harambee'])->name('credit_harambee');
Route::post('/upload_harambee', [AccountController::class, 'upload_harambee'])->name('upload_harambee');
Route::post('/update_image', [AccountController::class, 'update_image'])->name('update_image');
Route::get('/user_comment', [ViewController::class, 'user_comment'])->name('user_comment');
Route::post('/send_comment', [MessageController::class, 'send_comment'])->name('send_comment');
Route::get('/reply_message', [ViewController::class, 'reply_message'])->name('reply_message');
Route::post('/feedback/{messageId}', [MessageController::class, 'feedback'])->name('feedback');
Route::delete('/delete_message/{id}', [MessageController::class, 'delete_message'])->name('delete_message');
Route::get('/assignment', [TaskController::class, 'assignment'])->name('assignment');
Route::delete('/delete_task/{task}', [TaskController::class, 'delete_task'])->name('delete_task');
Route::get('/downloads', [DownloadController::class, 'downloads'])->name('downloads');
Route::get('/view_downloads', [DownloadController::class, 'view_downloads'])->name('view_downloads');
Route::post('/add_downloads', [DownloadController::class, 'add_downloads'])->name('add_downloads');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/communication', [MessageController::class, 'communication'])->name('communication');
Route::post('/upload_profile_image', [ImageController::class, 'upload_profile_image'])->name('upload_profile_image');
Route::get('/transaction', [ViewController::class, 'transaction'])->name('transaction');
Route::post('/buys', [BuyController::class, 'buys'])->name('buys');
Route::post('/sells', [SellController::class, 'sells'])->name('sells');
Route::delete('/delete_download/{download}',[DownloadController::class, 'delete_download'])->name('delete_download');
Route::get('/downloads/{id}/edit', [DownloadController::class, 'edit'])->name('edit_download');
