<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\SubAdminController;

use App\Http\Controllers\ClubRegistrationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');

Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');

Route::get('subadmin_dashboard',[CustomAuthController::class,'subadmin_dashboard'])->middleware('isLoggedIn');

Route::get('admin_dashboard',[CustomAuthController::class,'admin_dashboard'])->middleware('isLoggedIn');

Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/manage_club',[AdminController::class,'manage_club']);

Route::get('/add_club',[AdminController::class,'add_club']);

Route::post('/upload_club',[AdminController::class,'upload_club']);

Route::get('/delete_club/{id}', [AdminController::class,'deleteClub'])->name('delete_club');

Route::get('/add_club_advisors', [AdminController::class,'add_club_advisors']);

Route::post('/add_advisors',[AdminController::class,'add_advisors']);

Route::get('/club_details',[SubAdminController::class,'club_details']);

Route::post('/assign_club',[AdminController::class,'assign_club']);

Route::get('/slot_details',[SubAdminController::class,'slot_details']);

Route::get('/edit-club-info', [SubAdminController::class, 'slot_details']);

Route::get('/get-clubs/{id}', [SubAdminController::class, 'getClub']);

Route::post('/update_club_info', [SubAdminController::class, 'update_club_info']);


Route::post('/club_register', [ClubRegistrationController::class, 'club_register']);

