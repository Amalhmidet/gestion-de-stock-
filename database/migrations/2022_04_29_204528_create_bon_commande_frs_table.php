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
        Schema::create('bon_commande_frs', function (Blueprint $table) {
            $table->id();
            $table->string('desc');
            $table->unsignedBigInteger('fournisseur_id')->nullable();
            $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('set null')->onUpdate('set null');
            $table->dateTime('dat_com');
            $table->date('dat_exp');
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
        Schema::dropIfExists('bon_commande_frs');
    }
};
