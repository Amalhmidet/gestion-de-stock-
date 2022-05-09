<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneCommande;
use App\Models\BonCommandeFrs;
use App\Models\Fournisseur;
use App\Models\Produit;

class LigneCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ligne_commandes['lignes_commandes'] = LigneCommande::orderBy('id','desc')->paginate(4);   
        return view('Ligne Commande/LigneCommande',$ligne_commandes); 
    }
    public function show($id)
    {   
        $bon_commande_frs = BonCommandeFrs::find($id);
        $produits = Produit::all();
        $fournisseur = Fournisseur::find($bon_commande_frs['fournisseur_id']);
        return view('Ligne Commande/LigneCommande', compact('bon_commande_frs'),compact('produits')); 
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
        
        $input['pu'] = Produit::where('designation',$input['produit'])->get()[0]->prix;
        $input['mont_Ht']= (Produit::where('designation',$input['produit'])->get()[0]->prix)*$input['qte'];
        LigneCommande::create($input);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $ligne_commandes  = LigneCommande::where($where)->first();
        return response()->json($ligne_commandes );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        LigneCommande::where('id',$request->id)->delete();
        return back();
    }
}