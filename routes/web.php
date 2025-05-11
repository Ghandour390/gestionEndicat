<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ClasseRoomController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/courses', function () {
    return view('courses.courses');
});
Route::get('/show-document', function () {
    return view('courses.show-document');
});
// Route::get('/show-vedios', function () {
//     return view('courses.show-vedios');
// });


// route::get('/gestionUsers',[AdminController::class,'']);

// route::resource('users',UserController::class);

// auth routes-----------------------------
Route::get('/login', function () { return view('auth.login');})->name('login');

Route::get('/register', function (){ return view('auth.register');} )->name('register');
Route::get('/profil',function(){return view('dashboard.profil');})->name('profil');

Route::post('/login1', [AuthController::class, 'login'])->name('login');
Route::post('/register1', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.admin');
Route::get('/admins',[AdminController::class,'index']);
Route::post('/admin/create',[AdminController::class,'store'])->name('admin.store');
Route::put('/admin/update/{id}',[AdminController::class,'update'])->name('admin.update');
Route::delete('/admin/delete/{id}',[AdminController::class,'destroy'])->name('admin.destroy');
// Route::resource('/apprenants',ApprenantController::class);


route::resource('/classes',ClasseController::class);
// ---------------->Documment----------------------------
Route::get('/documents',[DocumentController::class,'index'])->name('documents.index');
route::post('/documents/create',[DocumentController::class,'store'])->name('documents.store');
route::put('/documents/update',[DocumentController::class,'update'])->name('documents.update');
route::delete('/documents/delete/{id}',[DocumentController::class,'destroy'])->name('documents.destroy');
route::get('/courses',[ApprenantController::class,'getAllCourses'])->name('courses.getAllCourses');


// --------------Vidioe---------------------------------------
Route::resource('/videos',VideoController::class);
route::get('/show-vedios/{id}',[VideoController::class,'showVideos'])->name('showVideos');




// ------------classes----------------------------------
route::resource('/classes',ClasseController::class);


// ---------------cours-----------------------
route::resource('/cours',CoursController::class);  

// ------------role-----------------------
route::resource('/roles',RoleController::class);





// -------------classeRoom-----------------------------
Route::get('classerooms',[ClasseRoomController::class,'index']);

// -----------Examen-------------------------------
Route::resource("/examens",ExamenController::class);
// ----------------ressources-------------------------
route::get('/ressources',[RessourceController::class,'index'])->name('ressources.index');
route::post('/ressources/create',[RessourceController::class,'store'])->name('ressources.store');
route::delete('/ressource/{id}',[RessourceController::class,'destroy'])->name('ressources.delete');
route::put('ressources/update',[RessourceController::class,'update'])->name('ressources.update');
Route::get('/ressources/{id}/details', [RessourceController::class, 'getDetails'])->name('ressources.details');

// ---------formateur----------------------------
route::resource('/formateurs',FormateurController::class);
Route::post('/formateurs/{id}/restore', [FormateurController::class, 'restore'])->name('formateurs.restore');

// ---------toggle form----------------------------

