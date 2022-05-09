<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view ('Categorie.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::orderBy('nomcat')->get();
        return view('Categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exist=Categorie::where("nomcat","=",$request->nomcat)->first();
       if($exist!=null)
       {
        return redirect('categorie')->with('msg', 'Cette catégorie existe déja!');
       }
        $input = $request->all();
        Categorie::create($input);
        return redirect('categorie')->with('flash_message', 'Catégorie ajouté!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view('Categorie.show')->with('categories', $categorie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('Categorie.edit')->with('categories', $categorie);
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
        $categorie = Categorie::find($id); // Categorie est le nom de model
        $input = $request->all();
        $categorie->update($input);
        return redirect('categorie')->with('flash_message', 'Categorie modifié !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::destroy($id);
        return redirect('categorie')->with('flash_message', 'categorie deleted!');
    }
    public function search(Request $request)
    {
        $categories = $request->categories;
    
        $categories = Categorie::where('nomcat', 'like', '%'.$categories.'%')
            ->orderBy('nomcat')
            ->paginate(5);
    
        return view('Categorie.index')
            ->with('categories', $categories);    
    }
}
