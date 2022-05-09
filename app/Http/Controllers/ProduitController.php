<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Famille;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Input;
use App\Models\output;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view ('Produit.index')->with('produits', $produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::orderBy('nomcat')->get();

        return view('Produit.create', compact('categories')); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $input = $request->all();
        Produit::create($input);
        return redirect('produit')->with('msgajt', 'Produit ajouté avec succé!'); //cette fonction qui faire l'enregistrement des données dans les tables puis faire un redirection au page index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::find($id);

        return view('Produit.show')->with('produits', $produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('Produit.edit')->with('produits', $produit); //cette fonction afficher le formulaire edit avec la récupération des données d'objet demander
    }
    public function add($id)
    {
        $produit = Produit::find($id);
        $input = Input::orderBy('id', 'DESC')->first();
        $produit['quantite']=$produit['quantite']+$input['qte'];
        $produit->update();
        return redirect('produit')->with('msgmod', 'Product added to stock :)');
    }
    public function out($id)
    {
        $produit = Produit::find($id);
        $output = Output::orderBy('id', 'DESC')->first();
        $produit['quantite']=$produit['quantite']-$output['qte'];
        if ($produit['quantite']<0){
            return redirect('produit')->with('msgfail', 'La quantité sortie est superieur a la quantité en stock!!');
        }
        $produit->update();
        return redirect('produit')->with('msgmod', 'Product out of stock :)');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit ::find($id); // produit  est le nom de model
        $input = $request->all();
        $produit->update($input);
        return redirect('produit ')->with('msgmod', 'produit  modifié !!');  //cette fonction faire la modification ajouter dans la tabel puis redirection au page index
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect('produit')->with('msgsup', 'Produit supprimé avec succé!');
    }

   
    public function search(Request $request)
    {
        $produits = $request->produits;
    
        $produits = Produit::where('designation', 'like', '%'.$produits.'%')->orWhere('marque', 'like', '%'.$produits.'%')->orWhere('prix', 'like', '%'.$produits.'%')
            ->orderBy('designation')
            ->paginate(5);
    
        return view('produit.index')
            ->with('produits', $produits);    
    }
}
