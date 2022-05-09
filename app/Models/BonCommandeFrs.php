<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BonCommandeFrs extends Model
{
    protected $table = 'bon_commande_frs';
    protected $primaryKey = 'id';
    protected $fillable = ['desc','fournisseur_id','dat_com','dat_exp'];
    public function fournisseur(){
        return $this->belongsTo('App\Models\Fournisseur');
    }
    public function lignes_commandes(){
        return $this->hasMany('App\Models\LigneCommande');
    }
}


