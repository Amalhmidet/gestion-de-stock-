<?php

namespace App\Http\Controllers;
use App\Models\LigneCommande;
use App\Models\BonCommandeFrs;
use App\Models\Fournisseur;
use App\Mail\contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function display($id)
{
    $bon_commande_frs = BonCommandeFrs::find($id);
    $fournisseur = Fournisseur::find($bon_commande_frs['fournisseur_id']);
    $ligne_commandes = BonCommandeFrs::with('lignes_commandes')->find($id)->lignes_commandes;
    $commandeAttributes = ['id','desc','dat_com','dat_exp'];
    $fournisseurAttributes = ['nom_prenom','adresse','num_tel','email'];
    $commandeDetails = [];
    foreach ($commandeAttributes as $value) {
        $commandeDetails[$value] = $bon_commande_frs->$value; 
    };
    $commandeDetails['fournisseurDetails']=[];
    foreach ($fournisseurAttributes as $value) {
        $commandeDetails['fournisseurDetails'][$value] = $fournisseur->$value;
    };
    $commandeDetails['lignes_commandes']= [];
    foreach ($ligne_commandes as $value) {
        array_push($commandeDetails['lignes_commandes'],$value);
    };
    // Mail::to('jlejla66@gmail.com')
            // ->send(new contact($commandeDetails));
    return view('display',compact('bon_commande_frs'),compact('ligne_commandes'),compact('fournisseur'));
    }
}
