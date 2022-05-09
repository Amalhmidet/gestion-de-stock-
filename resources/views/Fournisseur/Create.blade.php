@extends('layouts.app')
@section('content')
 
  <div class="card">
    <div class="card-header">Ajouter Fournisseur</div>
      @if ($message = Session :: get ('msg')) 
        <div class="alert alert-success">
        {{$message}}
        </div>
      @endif

      
    <div class="card-body">
        
        <form action="{{ url('fournisseur') }}" method="post" name="fournisseur"  >
          {!! csrf_field() !!}
          <label>Nom et Prénom</label>
          <input type="text" name="nom_prenom" id="nom_prenom" class="form-control" required=""><br>
          <label>Adresse</label></br>
          <input type="text" name="adresse" id="adresse" class="form-control" required=""></br>
          <label>Numére de téléphone</label></br>
          <input type="tel"  name="num_tel" id="telNo" class="form-control" required=""></br>
          <label>Adresse E-mail</label></br>
          <input type="email" name="email" id="email" class="form-control" required=""></br>
          <input type="submit" value="Enregistrer" class="btn bg-primary-transparent"></br>
      </form>
    
    </div>
  </div>
  <script>
  </script>
 
@stop