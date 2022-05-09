@extends('layouts.app') <!-- Nom de dossier qui contients les vues et le nom de fichier layout -->
@section('content') 
  <div class="card">
    <div class="mt-5 fs-3 mx-5 bg-secondary">
      <div class="text-center">
        Détails de la commande
      </div>
    </div>
    <div class="fs-4 card-body">
          <div class="border-danger card-body">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="text-success card-title">Numéro de commande :</h5>
              {{ $bon_commande_frs->id   }} 
            </div>
          </div>
          <div class="card shadow">
            <div class="card-body">
              <h5 class="text-success card-title">Description :</h5>
              {{ $bon_commande_frs->desc   }} 
            </div>
          </div>
          <div class="card shadow">
            <div class="card-body">
              <h5 class="text-success card-title">Fournisseur :</h5>
              {{ $bon_commande_frs->fournisseur->nom_prenom   }} 
            </div>
          </div>
          <div class="card shadow">
            <div class="card-body">
              <h5 class="text-success card-title">Date de confirmation :</h5>
              {{ $bon_commande_frs->dat_com   }} 
            </div>
          </div>
          <div class="card shadow">
            <div class="card-body">
              <h5 class="text-success card-title">Date d'expiration :</h5>
              {{ $bon_commande_frs->dat_exp  }} 
            </div>
          </div>
    </div> 
      <hr>
    </div>
  </div>
@endsection