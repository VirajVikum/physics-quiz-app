<?php

use App\Livewire\Admin\QuestionCategories\Index as Qcategories;
use App\Livewire\Admin\QuestionLevels\Index as Qlevels;
use App\Livewire\Admin\Questions\Index as QuestionIndex;
use App\Livewire\Admin\Users\Index as UserIndex;
use App\Livewire\Client\Questions\Index as ClientQuestionIndex;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', UserIndex::class,)->name('user-index');
    Route::get('/questions', QuestionIndex::class,)->name('question-index');
    Route::get('/categories', Qcategories::class,)->name('question-categories');
    Route::get('/levels', Qlevels::class,)->name('question-levels');
});

Route::prefix('client')->name('client.')->group(function (){
    Route::get('/questions',ClientQuestionIndex::class,)->name('question-index');
});