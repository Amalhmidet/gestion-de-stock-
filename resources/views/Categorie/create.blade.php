@extends('layouts.app')
@section('content')

      <div class="card">
    <div class="card-header">Ajouter Catégorie</div>
    <div class="card-body">
        
    <form action="{{ url('categorie') }}" method="post">
        {!! csrf_field() !!}
        <label>nom de catégorie</label></br>
        <input type="text" name="nomcat" id="nomcat" class="form-control" required=""></br>
        <label>description de catégorie</label></br>
        <input type="text" name="desccat" id="desccat" class="form-control" required=""></br>
        <input type="submit" value="Enregistrer" class="btn bg-primary-transparent"></br>
    </form>
    
    </div>
  </div>

@stop