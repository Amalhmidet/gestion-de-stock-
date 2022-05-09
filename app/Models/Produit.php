<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Output;

class Produit extends Model
{
    protected $fillable = ['designation','prix','quantite','marque','categorie_id'];
    
    protected $primaryKey ='id';
    protected $table = 'produits';
        
    public function categorie(){ 
        return $this->belongsTo('App\Models\Categorie'); 
    }
    public function Input(){
        return $this->hasMany('App\Models\Input');
    }
    public function Output(){
        return $this->hasMany('App\Models\Output');
    }
}
