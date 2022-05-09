<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Input extends Model
{
    use HasFactory;
    protected $table = 'inputs';
    protected $primaryKey = 'id';
    protected $fillable = ['date','produit_id','qte'];

    public function Produit(){
        return $this->belongsTo('App\Models\Produit');
    }

}
