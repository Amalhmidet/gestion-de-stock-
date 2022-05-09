<?php

use App\Http\Controllers\BonCommandeFrsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LigneCommandeController;
use Illuminate\Http\Request;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome2');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/fournisseur', function () {
    return view('Fournisseur.index');
});
Route::get('/produit', function () {
    return view('produit.index');
});
Route::get('/categorie', function () {
    return view('Categorie.index');
});



Auth::routes();
Route::get('generate/{id}', [App\Http\Controllers\GenerateController::class, 'display']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('index');

Route::resource('/fournisseur', FournisseurController::class);
Route::any('/search', 'FournisseurController@search')->name('search');
Route::post('/fournisseurSearch', [App\Http\Controllers\FournisseurController::class, 'search'])->name('fournisseurSearch');
Route::post('/categorieSearch', [App\Http\Controllers\CategorieController::class, 'search'])->name('categorieSearch');


Route::resource('/categorie', CategorieController::class);
Route::resource('/famille', FamilleController::class);

Route::resource('/produit', ProduitController::class);
//Route::get('/search', 'ProduitController@search');
Route::resource('/bon_commande_frs', BonCommandeFrsController::class);
Route::resource('/Lignes_commandes', LigneCommandeController::class);
Route::get('/Ligne_commandes/{id}', [LigneCommandeController::class, 'destroy']);
Route::post('/storeLignes_commandes', [App\Http\Controllers\LigneCommandeController::class, 'store'])->name('storeLignes_commandes');
Route::post('/produitSearch', [App\Http\Controllers\ProduitController::class, 'search'])->name('produitSearch');
Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'jlejla66@gmail.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});



//stock routes 
Route::post('/add', [App\Http\Controllers\StockController::class, 'store']);
Route::post('/out', [App\Http\Controllers\StockController::class, 'store2']);
Route::get('/input', [App\Http\Controllers\StockController::class, 'input']);
Route::get('/output', [App\Http\Controllers\StockController::class, 'output']);
Route::get('/add/{id}', [App\Http\Controllers\ProduitController::class, 'add']);
Route::get('/out/{id}', [App\Http\Controllers\ProduitController::class, 'out']);