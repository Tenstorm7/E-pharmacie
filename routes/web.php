<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//routes pour le personnel
Route::get('/personnel/index',[PersonnelController::class,'create'])->name("personel.index");
Route::post('/personnel/store',[PersonnelController::class,'store'])->name("personnel.store");

//routes pour les clients 


//pour la fimille de produit 
Route::get('/famille/index',[FamilleController::class,'create'])->name('famille.index');
Route::post('/famille/store',[FamilleController::class,'store'])->name('famille.store');
Route::get('/famille/show',[FamilleController::class,'index'])->name('famille.show');

//pour le categorie de produit 
Route::get('/categorie/{id}',[CategorieController::class,'create'])->name('categorie.create');
Route::post('/categorie/store/{id_famille}',[CategorieController::class,'store'])->name('categorie.store');

// pour les produit 
Route::get('/produit/create',[ProduitController::class,'create'])->name('produit.create');
Route::post('/produit/store',[ProduitController::class,'store'])->name('produit.store');
Route::get('/produit/index',[ProduitController::class,'index'])->name('produit.index');
Route::post('/produit/update/{produit}',[ProduitController::class,'update'])->name('produit.update');
Route::get('/produit/edit/{produit}',[ProduitController::class,'edit'])->name('produit.edit');
Route::delete('/produit/delete/{produit}',[ProduitController::class,'destroy'])->name('produit.destroy');


//routes pour les clients
Route::get('/client/index',[ClientController::class,'index'])->name('client.index');
Route::post('/client/store',[ClientController::class,'store'])->name('client.store');
Route::get('/client/create',[ClientController::class,'create'])->name('client.create');
Route::get('/client/show',[ClientController::class,'show'])->name('client.show');
Route::delete('/client/destroy/{client}',[ClientController::class,'destroy'])->name('client.delete');
Route::get('/client/edit/{client}',[ClientController::class,'edit'])->name('client.edit');
Route::post('/client/update/{client}',[ClientController::class,'update'])->name('client.update');

require __DIR__.'/auth.php';
