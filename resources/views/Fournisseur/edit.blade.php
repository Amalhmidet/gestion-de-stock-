
@extends('layouts.app')
@section('content')
<style>
 input,label{font-size: 15px;}
</style>
 						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Modifier Fournisseur</h4>
							</div>
            </div>
<div class="card">
  <div class="card-header">Modifier Fournisseur </div>
      @if ($message = Session :: get ('msg')) 
        <div class="alert alert-success">
        {{$message}}
        </div>
      @endif
  <div class="card-body">
      
      <form action="{{ url('fournisseur/' .$fournisseurs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fournisseurs->id}}" id="id" />
        <label>Nom et Prénom</label></br>
        <input type="text" name="nom_prenom" id="nom_prenom" value="{{$fournisseurs->nom_prenom }}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$fournisseurs->adresse}}" class="form-control"></br>
        <label>Numéro de téléphone</label></br>
        <input type="text" name="num_tel" id="num_tel" value="{{$fournisseurs->num_tel}}" class="form-control"></br>
        <label>adresse E-mail</label></br>
        <input type="email" name="email" id="nom" value="{{$fournisseurs->email}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn bg-primary-transparent"></br>
    </form>
   
  </div>
</div>
 
@stop