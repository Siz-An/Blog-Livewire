<?php

use App\Filament\Resources\FaqResource;
use App\Livewire\BlogDetail;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}',ShowService::class)->name('service');
Route::get('/team',ShowTeamPage::class)->name('team');
Route::get('/blog',ShowBlog::class)->name('blog');
Route::get('/blog/{id}',BlogDetail::class)->name('blogDetail');
Route::get('/faq',ShowFaqPage::class)->name('faq');
Route::get('/page/{id}',ShowPage::class)->name('page');
Route::get('/contact',ShowContactPage::class)->name('contact');






