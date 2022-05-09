<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //remplissage de la table category 
        $rows = [];
        for ($i=1; $i <11 ; $i++) { 
            $row = ['nomcat' => 'category'.strval($i), 'desccat' => 'categoryDescription'.strval(rand(1,10))];
            array_push($rows,$row);
        }
        DB::table('categories')->insert($rows);
        //remplissage de la table produit
        $rows = [];
        for ($i=0; $i <21 ; $i++) { 
            $row = ['categorie_id' => rand(1,10),'designation' => 'product'.strval($i), 'prix' => $i*1000, 'quantite' => rand(50,100), 'marque' => 'M'.strval(rand(10,20))];
            array_push($rows,$row);
        };
        DB::table('produits')->insert($rows);
        //remplissage de la table fournisseur
        $rows = [];
        $addresses = ['Bizerte','Sfax','Sousse','Béja','Gafsa','Tunis'];
        for ($i=1; $i <11 ; $i++) { 
            $num_tel = strval(rand(50000000,59000000));
            $row = ['nom_prenom' => 'fournissuerdeproduit'.strval($i), 'adresse' => $addresses[rand(0,5)], 'num_tel' => $num_tel, 'email' => 'fournisseur'.strval($i).'@gmail.com'];
            array_push($rows,$row);
        };
        DB::table('fournisseurs')->insert($rows);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
