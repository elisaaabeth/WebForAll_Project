<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PiloteController;
use Illuminate\Support\Facades\Route;


// acceder aux page grace au url
//route

//sans connexion
Route::get('/', [HomeController::class, "home"])->name('home');
Route::get('/about', [HomeController::class, "about"])->name('about');
Route::get('/offers', [HomeController::class, "offers"])->name('offers');

// connexion etudiant
Route::get('/homeEtudiant', [EtudiantController::class, "homeEtudiant"])->name('homeEtudiant');
Route::get('/entrepriseEtudiant', [EtudiantController::class, "entrepriseEtudiant"])->name('entrepriseEtudiant');
Route::get('/offreEtudiant', [EtudiantController::class, "offreEtudiant"])->name('offreEtudiant');
// Route::get('/homeEtudiant', [EtudiantController::class, "homeEtudiant"])->name('homeEtudiant');

// connexion admin
Route::get('/etudiantAdmin', [AdminController::class, "etudiantAdmin"])->name('etudiantAdmin');
Route::get('/homeAdmin', [AdminController::class, "homeAdmin"])->name('homeAdmin');
Route::get('/offreAdmin', [AdminController::class, "offreAdmin"])->name('offreAdmin');
Route::get('/piloteAdmin', [AdminController::class, "piloteAdmin"])->name('piloteAdmin');
Route::get('/entrepeiseAdmin', [AdminController::class, "entrepriseAdmin"])->name('entrepriseAdmin');

// connexion pilote
Route::get('/homePilote', [PiloteController::class, "homePilote"])->name('homePilote');
Route::get('/etudiantPilote', [PiloteController::class, "etudiantPilote"])->name('etudiantPilote');
Route::get('/entreprisePilote', [PiloteController::class, "entreprisePilote"])->name('entreprisePilote');
Route::get('/creerOffPilote', [PiloteController::class, "creerOffPilote"])->name('creerOffPilote');
Route::get('/creerEtuPilote', [PiloteController::class, "creerEtuPilote"])->name('creerEtuPilote');
Route::get('/creerEntPilote', [PiloteController::class, "creerEntPilote"])->name('creerEntPilote');
Route::get('/offrePilote', [PiloteController::class, "offrePilote"])->name('offrePilote');

//login
Route::get('connecter', [LoginController::class, "connecter"])->name('connecter');
Route::post('connecter', [LoginController::class, "connecter"])->name('connecter');
Route::post('homeAdmin', [AdminController::class, "homeAdmin"])->name('homeAdmin');
Route::post('/homeEtudiant', [EtudiantController::class, "homeEtudiant"])->name('homeEtudiant');
Route::post('/homePilote', [PiloteController::class, "homePilote"])->name('homePilote');








// pour la connexion
