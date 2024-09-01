<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Route;

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

// Route::get('/editing', function () {
//     return view('admin.editing');
// });

// TESTING PURPOSES COMMAND THIS LINE AFTER TESTING

Route::get('/testing', [UserController::class, 'testing']);
Route::post('/submit-radio', [UserController::class, 'submitRadio'])->name('submit.radio');


/* Auth Routes */

Route::get('/', [AuthController::class , 'index'] )-> name('login');

Route::post('/', [AuthController::class , 'authenticate'] );

Route::post('/logout', [AuthController::class , 'logout'] )-> name('logout');

Route::get('/register', [AuthController::class , 'register'] )-> name('register');
Route::post('/register', [AuthController::class , 'store'] );
Route::get('/register/show', [AuthController::class , 'show'] )-> name('register.show');

// End Auth Routes

// Admin Routes

// Alumni Routes
Route::get('/master-alumni', [AdminController::class , 'indexAlumni'] )-> name('alumnis.index')-> middleware('auth');
Route::get('/master-alumni/show', [AdminController::class , 'showAlumni'] )-> name('alumnis.show')-> middleware('auth');
Route::get('/master-alumni/{alumni}/edit', [AdminController::class , 'editAlumni'] )-> name('alumnis.edit')-> middleware('auth');
Route::put('/master-alumni/{alumni}', [AdminController::class , 'updateAlumni'] )-> name('alumnis.update')-> middleware('auth');
Route::delete('/master-alumni/{alumni}', [AdminController::class , 'destroyAlumni'] )-> name('alumnis.destroy')-> middleware('auth');

Route::get('/alumni-create', [AdminController::class , 'createAlumni'] )-> name('alumnis.create')-> middleware('auth');
Route::post('/alumni-create', [AdminController::class , 'storeAlumni'] )-> name('alumnis.store')-> middleware('auth');
// End Alumni Routes

// Events Routes
Route::get('/master-event', [AdminController::class , 'indexEvent'] )-> name('events.index')-> middleware('auth');
Route::get('/master-event/show', [AdminController::class , 'showEvent'] )-> name('events.show')-> middleware('auth');
Route::get('/master-event/{event}/edit', [AdminController::class , 'editEvent'] )-> name('events.edit')-> middleware('auth');
Route::put('/master-event/{event}', [AdminController::class , 'updateEvent'] )-> name('events.update')-> middleware('auth');
Route::delete('/master-event/{event}', [AdminController::class , 'destroyEvent'] )-> name('events.destroy')-> middleware('auth');

Route::get('/event-create', [AdminController::class , 'createEvent'] )-> name('events.create')-> middleware('auth');
Route::post('/event-create', [AdminController::class , 'storeEvent'] )-> name('events.store')-> middleware('auth');
// End Event Routes

// Jobfair routes
Route::get('/master-jobfair', [AdminController::class, 'indexjobfair'])-> name('jobfair.index')->middleware('auth');
Route::get('/master-jobfair/show', [AdminController::class, 'showjobfair'])-> name('jobfair.show')->middleware('auth');
Route::get('/master-jobfair/{jobfair}/edit', [AdminController::class, 'editjobfair'])-> name('jobfair.edit')->middleware('auth');
Route::put('/master-jobfair/{jobfair}', [AdminController::class, 'updatejobfair'])-> name('jobfair.update')->middleware('auth');
Route::delete('/master-jobfair/{jobfair}', [AdminController::class, 'destroyjobfair'])-> name('jobfair.destroy')->middleware('auth');

Route::get('/jobfair-create', [AdminController::class, 'createjobfair'])-> name('jobfair.create')->middleware('auth');
Route::post('/jobfair-create', [AdminController::class, 'storejobfair'])-> name('jobfair.store')->middleware('auth');


// end Jobfair routes

// Beasiswa routes
Route::get('/master-beasiswa', [AdminController::class, 'indexbeasiswa'])-> name('beasiswa.index')->middleware('auth');
Route::get('/master-beasiswa/show', [AdminController::class, 'showbeasiswa'])-> name('beasiswa.show')->middleware('auth');
Route::get('/master-beasiswa/{beasiswa}/edit', [AdminController::class, 'editbeasiswa'])-> name('beasiswa.edit')->middleware('auth');
Route::put('/master-beasiswa/{beasiswa}', [AdminController::class, 'updatebeasiswa'])-> name('beasiswa.update')->middleware('auth');
Route::delete('/master-beasiswa/{beasiswa}', [AdminController::class, 'destroybeasiswa'])-> name('beasiswa.destroy')->middleware('auth');

Route::get('/beasiswa-create', [AdminController::class, 'createbeasiswa'])-> name('beasiswa.create')->middleware('auth');
Route::post('/beasiswa-create', [AdminController::class, 'storebeasiswa'])-> name('beasiswa.store')->middleware('auth');
Route::put('/beasiswa/{id}', [AdminController::class, 'updateBeasiswa'])->name('beasiswa.update')->middleware('auth');

// end Beasiswa routes

// Survey Route Start
Route::get('/master-survey', [AdminController::class, 'indexSurvey'])-> name('survey.index');
Route::get('/master-survey/{survey}/edit', [AdminController::class, 'editSurvey'])-> name('survey.edit');
Route::get('/master-survey/show', [AdminController::class, 'showSurvey'])->name('survey.show');

// End Survey Route

// University Routes

Route::get('/master-university', [AdminController::class , 'indexUniversity'] )-> name('university.index')-> middleware('auth');
Route::get('/master-university/show', [AdminController::class , 'showUniversity'] )-> name('university.show')-> middleware('auth');

// End University Routes

// Job Routes

Route::get('/master-job', [AdminController::class , 'indexJob'] )-> name('job.index')-> middleware('auth');
Route::get('/master-job/show', [AdminController::class , 'showJob'] )-> name('job.show')-> middleware('auth');

// End Job Routes

// Data Tambahan Routes

Route::get('/master-information', [AdminController::class , 'indexInformation'] )-> name('information.index')-> middleware('auth');
Route::get('/master-information/show', [AdminController::class , 'showInformation'] )-> name('information.show')-> middleware('auth');

// End Data Tambahan Routes

// Loker Routes

Route::get('/master-loker', [AdminController::class, 'indexloker'])-> name('loker.index');
Route::get('/master-loker/show', [AdminController::class, 'showloker'])-> name('loker.show');
Route::get('/master-loker/{loker}/edit', [AdminController::class, 'editloker'])-> name('loker.edit');
Route::put('/master-loker/{loker}', [AdminController::class, 'updateloker'])-> name('loker.update');
Route::delete('/master-loker/{loker}', [AdminController::class, 'destroyloker'])-> name('loker.destroy');

Route::get('/loker-create', [AdminController::class, 'createloker'])-> name('loker.create');
Route::post('/loker-create', [AdminController::class, 'storeloker'])-> name('loker.store');

Route::post('/loker/store', [AdminController::class, 'storeloker'])->name('loker.store');
// End Loker Routes

// End Admin Routes

// User Routes

Route::get('/dashboard', [UserController::class , 'index'] )-> name('dashboard')-> middleware('auth');

// Profile Routes

Route::get('/profile', [UserController::class , 'profile'] )-> name('profile')-> middleware('auth');
Route::put('/profile/{alumni}', [UserController::class , 'update'] )-> name('profile.update')-> middleware('auth');

// End Profile Routes

// Survey Routes

Route::get('/survey', [UserController::class, 'survey'])-> name('survey')->middleware('auth');
Route::post('/survey', [UserController::class, 'store'])-> name('survey.store');

// End Survey Routes

// Loker Routes
Route::get('/loker', [UserController::class, 'loker'])-> name('loker');
Route::post('/loker', [UserController::class, 'store'])-> name('survey.store');

// End Loker Routes

// End User Routes
