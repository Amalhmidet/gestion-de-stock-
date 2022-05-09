@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modifier Bon de commande</div>
    @if ($message = Session :: get ('msg')) 
      <div class="alert alert-success">
      {{$message}}
      </div>
    @endif
  <div class="card-body">
      
      <form action="{{ url('bon_commande_frs/' .$bon_commande_frs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="" id="id" />
        <label>Description</label></br>
        <input type="text" name="desc" id="desc" value="" class="form-control"></br>
        <label>Date de création</label></br>
        <input type="date" name="dat_com" id="dat_com" value="" class="form-control"></br>
        <label>Date d'expiration</label></br>
        <input type="date" name="dat_exp" id="dat_exp" value="" class="form-control"></br>
        <label for="fournisseur_id" class="form-label">Fournisseur</label>
                            <select class="form-control @error('fournisseur_id') is-invalid @enderror" id="fournisseur_id" name="fournisseur_id" required="">
                                @foreach($fournisseurs as $fournisseur)
                                        value="{"{$fournisseur->id}}"
                                    <option value="{{$fournisseur->id}}" >{{$fournisseur->id}} - {{ $fournisseur->nom_prenom }}</option>
                                @endforeach
                            </select>
                            @error('fournisseur_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop