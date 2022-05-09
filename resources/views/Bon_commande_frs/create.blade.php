@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ajouter Bon de commande fournisseur</h3>
            </div>
            <div class="card-body">
                <form class="row g-2 needs-validation" novalidate action="{{ url('bon_commande_frs') }}" method="post" >
                    @csrf
                    <div class="my-3 row">
                        <div class="col">
                            <label for="desc" class="form-label">Description</label>
                            <input type="text" name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror " value="{{ old('desc') }}" required="">
                            @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
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
                        </div>
                    </div>
                    <div class="my-3 row">
                        <div class="col">
                            <label for="dat_com" class="form-label">Date de création</label>
                            <input type="date" name="dat_com" id="dat_com" class="form-control @error('dat_com') is-invalid @enderror" required="">
                            @error('dat_com')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="col">
                            <label for="dat_exp" class="form-label">Date d'expiration</label>
                            <input type="date" name="dat_exp" id="dat_exp" class="form-control @error('dat_exp') is-invalid @enderror" required="">
                            @error('dat_exp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Ajouter un bon de commande</button>          
                </form>
            </div>
        </div>
	</div>
 </div>
@endsection