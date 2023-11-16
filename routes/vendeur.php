<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Vendeur\ImageController;
use App\Http\Controllers\Vendeur\CourseController;
use App\Http\Controllers\Vendeur\LessonController;
use App\Http\Controllers\Vendeur\ChapterController;
use App\Http\Controllers\Vendeur\ContentController;
use App\Http\Controllers\Vendeur\VendeurController;

Route::get('/', [VendeurController::class, 'index'])->name('vendeur');

Route::resource('courses', CourseController::class);

Route::resource('chapters', ChapterController::class);

Route::resource('lessons', LessonController::class);
Route::get('/lesson_image/{id}', [LessonController::class, 'lesson_images'])->name('lesson.images');
Route::get('/lesson_contenu/{id}', [LessonController::class, 'lesson_contenu'])->name('lesson.contenu');

Route::resource('contents', ContentController::class);

Route::resource('images', ImageController::class);

