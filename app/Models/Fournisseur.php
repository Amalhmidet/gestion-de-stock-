<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fournisseur extends Model
{
    protected $table = 'fournisseurs';
    protected $primaryKey = 'id';
    protected $fillable = ['nom_prenom','adresse','num_tel','email'];

    public function bon_commande_frs(){

        return $this->hasMany('App\Models\Bon_commande_frs');
    }


}
