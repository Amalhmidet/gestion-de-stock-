<?php

namespace App\Http\Controllers;


use App\Models\BonCommandeFrs;
use App\Models\Fournisseur;
use App\Http\Requests\bonDeCommandeRequest;
use Illuminate\Support\Facades\Validator;

class BonCommandeFrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $fournisseurs = Fournisseur::orderBy('nom_prenom')->get();
        $bon_commande_frs = BonCommandeFrs::all();
          return view ('Bon_commande_frs.index_com')->with('bon_commande_frs', $bon_commande_frs,'fournisseurs',$fournisseurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::orderBy('nom_prenom')->get();
        return view('Bon_commande_frs.create', compact('fournisseurs'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bonDeCommandeRequest $request)
    {   
        $input = $request->all();
        BonCommandeFrs::create($input);
        $fournisseurs = Fournisseur::orderBy('nom_prenom')->get();
        $bon_commande_frs = BonCommandeFrs::all();
        return view ('Bon_commande_frs.index_com')->with('bon_commande_frs', $bon_commande_frs,'fournisseurs',$fournisseurs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bon_commande_frs = BonCommandeFrs::find($id);
        return view('Bon_commande_frs.show_com')->with('bon_commande_frs', $bon_commande_frs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bon_commande_frs = BonCommandeFrs::find($id);
        $fournisseurs = Fournisseur::orderBy('nom_prenom')->get();
        return view('Bon_commande_frs.edit_com',compact('bon_commande_frs'),compact('fournisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(bonDeCommandeRequest $request, $id)
    {
        $bon_commande_frs = BonCommandeFrs::find($id); // Bon_commande_frs est le nom de model
        $input = $request->all();
        $bon_commande_frs->update($input);
        return redirect('bon_commande_frs')->with('msg', 'Commande modifiée avec succé !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BonCommandeFrs::destroy($id);
        return redirect('bon_commande_frs')->with('msg', 'Commande supprimée avec succé!');
    }
}