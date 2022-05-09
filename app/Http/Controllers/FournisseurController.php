<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            
            $fournisseurs = Fournisseur::all();
            return view ('Fournisseur.index')->with('fournisseurs', $fournisseurs);
        
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::orderBy('nom_prenom')->get();
        return view('Fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $exist=Fournisseur::where("email","=",$request->email)->first();
       if($exist!=null)
       {
        return redirect('fournisseur')->with('msg', 'Email existe déja!');
       }
       $exist=Fournisseur::where("num_tel","=",$request->num_tel)->first();
       if($exist!=null)
       {
        return redirect('fournisseur')->with('mssg', 'numero existe déja!');
       }
       $input = $request->all();
        Fournisseur::create($input);
        return redirect('fournisseur')->with('msg', 'Fournisseur ajouté!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('Fournisseur.show')->with('fournisseurs', $fournisseur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('Fournisseur.edit')->with('fournisseurs', $fournisseur);
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
        $fournisseur = Fournisseur::find($id); // Fournisseur est le nom de model
        $input = $request->all();
        $fournisseur->update($input);
        return redirect('fournisseur')->with('msg', 'Fournisseur modifié !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fournisseur::destroy($id);
        return redirect('fournisseur')->with('msg', 'Fournisseur  supprimé avec succé!');
    }

    public function search(Request $request)
{
    $fournisseurs = $request->fournisseurs;

    $fournisseurs = Fournisseur::where('nom_prenom', 'like', '%'.$fournisseurs.'%')
        ->orderBy('nom_prenom')
        ->paginate(5);

    return view('Fournisseur.index')
        ->with('fournisseurs', $fournisseurs);    
}}
