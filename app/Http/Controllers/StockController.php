<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Input;
use App\Models\output;


class StockController extends Controller
{
    public function store(Request $request)
    {   
        $req = $request->all();
        Input::create($req);
        return redirect('/add/'.$req["produit_id"]);
    }
    public function store2(Request $request)
    {   
        $req = $request->all();
        Output::create($req);
        return redirect('/out/'.$req["produit_id"]);
    }
    public function input()
    {
        $produits = Produit::all();
        $inputs = Input::all();
        
        return view ('stock.input',compact('inputs'),compact('produits'));
    }
    public function output()
    {
        $produits = Produit::all();
        $outputs = Output::all();     
        return view ('stock.output',compact('outputs'),compact('produits'));
    }
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $inputs  = Input::where($where)->first();
        return response()->json($inputs);
    }

    public function destroy(Request $request)
    {
        Input::where('id',$request->id)->delete();
        return back();
    }
}
