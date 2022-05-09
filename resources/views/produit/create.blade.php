@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">produits Page</div>
  <div class="card-body">
      
      <form action="{{ url('produit') }}" method="post">
        {!! csrf_field() !!}
        <label>designation</label></br>
        <input type="text" name="designation" id="designation" class="form-control" required></br>
        <label>prix</label></br>
        <input type="float" name="prix" id="prix" class="form-control" required></br>
        <label>Quantité</label></br>
        <input type="number" name="quantite" id="quantite" class="form-control" required></br>
        <label>marque</label></br>
        <input type="text" name="marque" id="marque" class="form-control" required></br>
        
        <label>categorie</label>
            <select class="form-control" id="categorie" name="categorie_id" required>

                @foreach($categories as $categories)

                    <option value="{{ $categories->id }}" >{{ $categories->nomcat}}</option>

                @endforeach

            </select><br><br>




        <input type="submit" value="Enregistrer" class="btn bg-primary-transparent"></br>
    </form>
   
  </div>
</div>
 
@stop