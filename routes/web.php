<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ConseilController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\MessagePersController;
use App\Http\Controllers\ReponsePersController;
use App\Http\Controllers\MessageForumController;
use App\Http\Controllers\ReponseForumController;
use App\Models\Commentaire;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () { return Inertia::render('Acceuil'); })->name('acceuil');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route du pannel Admin @WillySmith
Route::get('/medicaments', function () {
    return Inertia::render('Categories/ListeCategories', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('medicaments');


//routes pour le personnel
Route::get('/personnel/index',[PersonnelController::class,'index'])->name("personnel.index");
Route::get('/personnel/create/{user}',[PersonnelController::class,'create'])->name("personnel.create");
Route::post('/personnel/update/{user}',[PersonnelController::class,'update'])->name("personnel.update");
Route::post('/personnel/show/{user}',[PersonnelController::class,'show'])->name("personnel.show");
Route::delete('/personnel/destroy/{user}',[ProduitController::class,'destroy'])->name('personnel.delete');




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

//routes pour messages forum
Route::get('/forum/index',[MessageForumController::class,'index'])->name('forum.index');
Route::post('/forum/store',[MessageForumController::class,'store'])->name('forum.store');
Route::get('/forum/show/{mesforum}',[MessageForumController::class,'show'])->name('forum.show');
Route::delete('/forum/delete/{mesforum}',[MessageForumController::class,'destroy'])->name('forum.delete');

//routes pour messages prive
Route::get('/message/index',[MessagePersController::class,'index'])->name('message.index');
Route::post('/message/store',[MessagePersController::class,'store'])->name('message.store');
Route::get('/message/show/{mespers}',[MessagePersController::class,'show'])->name('message.show');
Route::delete('/message/delete/{mespers}',[MessagePersController::class,'destroy'])->name('message.delete');

//route pour les reponses prive
Route::get('/reponsepers/create/{mespers}',[ReponsePersController::class,'create'])->name('reponsepers.create');
Route::post('/reponsepers/store/{mespers}',[ReponsePersController::class,'store'])->name('reponsepers.store');
Route::delete('/reponsepers/delete/{reppers}',[ReponsePersController::class,'destroy'])->name('reponsepers.delete');

//route pour les reponses du forum
Route::get('/reponseforum/create/{mesforum}',[ReponseForumController::class,'create'])->name('reponseforum.create');
Route::post('/reponseforum/store/{mesforum}',[ReponseForumController::class,'store'])->name('reponseforum.store');
Route::delete('/reponseforum/delete/{repforum}',[ReponseForumController::class,'destroy'])->name('reponseforum.delete');

// route pour les commentaires
Route::get('/commentaire/create', [CommentaireController::class, 'create'])->name('commentaire.create');
Route::get('/commentaire/index', [CommentaireController::class, 'index'])->name('commentaire.index');
Route::post('/commentaire/store', [CommentaireController::class, 'store'])->name('commentaire.store');
Route::delete('/commentaire/delete/{comments}', [CommentaireController::class, 'destroy'])->name('commentaire.delete');

<<<<<<< HEAD
//route pour la localisation

Route::get('/localisation', function () {
    return view('localisation.localisation');
});
=======


>>>>>>> b1330fd87b8368fba2d5b50e33a57ef03349cba3
require __DIR__.'/auth.php';
