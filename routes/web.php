<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\portfolioViewController;
use App\Http\Controllers\LayoutsController;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', [AuthController::class, 'login']);

Route::resource('dashboard', DashboardController::class);
Route::resource('about', AboutController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('skill', SkillController::class);
Route::resource('project', ProjectController::class);
Route::resource('category', CategoryController::class);
Route::resource('contact', ContactController::class);

Route::get('layouts', [LayoutsController::class, 'index'])->name('layouts.apps');

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('portfolioView', [portfolioViewController::class, 'index'])->name('portfolio.hero');
Route::get('portfolioView/about', [portfolioViewController::class, 'about'])->name('portfolio.about');
Route::get('portfolioView/resume', [portfolioViewController::class, 'resume'])->name('portfolio.resume');
Route::get('portfolioView/skill', [portfolioViewController::class, 'skills'])->name('portfolio.skill');
Route::get('portfolioView/project', [portfolioViewController::class, 'project'])->name('portfolio.project');
Route::get('portfolioView/contact', [portfolioViewController::class, 'contact'])->name('portfolio.contact');

