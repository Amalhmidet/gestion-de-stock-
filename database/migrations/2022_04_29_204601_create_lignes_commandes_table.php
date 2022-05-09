<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignes_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bon_commande_frs_id')->nullable();
            $table->foreign('bon_commande_frs_id')->references('id')->on('bon_commande_frs')->onDelete('set null')->onUpdate('set null');
            $table->string('produit');
            $table->float('pu');
            $table->integer('qte');
            $table->integer('mont_Ht')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lignes_commandes');
    }
};
