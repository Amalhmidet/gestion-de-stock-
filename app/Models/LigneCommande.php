<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    protected $table = 'lignes_commandes';
    protected $primaryKey = 'id';
    protected $fillable = ['bon_commande_frs_id','produit','pu','qte','mont_Ht'];
    public function bon_commande_frs(){
        return $this->hasMany('App\Models\BonCommandeFrs');
    }
}

