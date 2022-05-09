@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modifier Produit</div>
  <div class="card-body">
      
      <form action="{{ url('produit/' .$produits->id) }}" method="post"> <!-- url est le direction aprés le remplissage de formulaire -->
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$produits->id}}" id="id" /> <!-- $produits "produits nom de table " -->
        <label>designation</label></br>
        <input type="text" name="designation" id="designation" value="{{$produits->designation}}" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="prix" value="{{$produits->prix}}" class="form-control"></br>
        <label>Quantité</label></br>
        <input type="text" name="quantite" id="quantite" value="{{$produits->quantite}}" class="form-control"></br>
        <label>Marque</label></br>
        <input type="text" name="marque" id="marque" value="{{$produits->marque}}" class="form-control"></br>
        <label>Catégorie</label></br>
        <input type="text" name="categorie" id="categorie" value="{{$produits->categorie->nomcat}}" class="form-control"></br>
        

        <input type="submit" value="Modifier" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop