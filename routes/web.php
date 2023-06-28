<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ConseilController;
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
Route::get('/personnel/index',[PersonnelController::class,'index'])->name("personnel.index");
Route::get('/personnel/create/{user}',[PersonnelController::class,'create'])->name("personnel.create");
Route::post('/personnel/update/{user}',[PersonnelController::class,'update'])->name("personnel.update");
Route::post('/personnel/show/{user}',[PersonnelController::class,'show'])->name("personnel.show");
Route::delete('/personnel/destroy/{user}',[ProduitController::class,'destroy'])->name('personnel.delete');

//routes pour les conseils


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


//routes pour les conseils
Route::get('/conseil/index',[ConseilController::class,'index'])->name('conseil.index');
Route::post('/conseil/store',[ConseilController::class,'store'])->name('conseil.store');
Route::get('/conseil/create',[ConseilController::class,'create'])->name('conseil.create');
Route::get('/conseil/show',[ConseilController::class,'show'])->name('conseil.show');
Route::delete('/conseil/destroy/{conseil}',[ConseilController::class,'destroy'])->name('conseil.delete');
Route::get('/conseil/edit/{conseil}',[ConseilController::class,'edit'])->name('conseil.edit');
Route::post('/conseil/update/{conseil}',[ConseilController::class,'update'])->name('conseil.update');

require __DIR__.'/auth.php';
