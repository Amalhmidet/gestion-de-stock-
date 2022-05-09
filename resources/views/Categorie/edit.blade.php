@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modifier Catégorie</div>
  <div class="card-body">
      
      <form action="{{ url('categorie/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        <label>Nom Catégorie</label></br>
        <input type="text" name="nomcat" id="nomcat" value="{{$categories->nomcat}}" class="form-control"></br>
        <label>Description Catégorie</label></br>
        <input type="text" name="desccat" id="desccat" value="{{$categories->desccat}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn bg-primary-transparent"></br>
    </form>
   
  </div>
</div>
 
@stop