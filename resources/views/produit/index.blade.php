@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        
            <div class="col-md-100">
                <div class="card">
                    <div class="card-header"><h6>Produits</h6></div>
                        @if ($message = Session :: get ('msgsup')) 
                            <div class="alert alert-success">
                            {{$message}}
                            </div>
                        @endif
                        @if ($message = Session :: get ('msgmod')) 
                            <div class="alert  alert-success">
                            {{$message}}
                            </div>
                        @endif
                        @if ($message = Session :: get ('msgfail')) 
                            <div class="alert  alert-danger">
                            {{$message}}
                            </div>
                        @endif
                        @if ($message = Session :: get ('msgajt')) 
                            <div class="alert alert-success">
                            {{$message}}
                            </div>
                        @endif
                        @if ($message = Session :: get ('message')) 
                            <div class="alert alert-dark">
                            {{$message}}
                            </div>
                        @endif
                    <div class="card-body">
                        <a href="{{ url('/produit/create') }}" class="btn bg-primary-transparent" title="Add New produit">
                            <i class="fe fe-plus" aria-hidden="true"></i> Ajouter un nouveau Produit
                        </a>
                        <form action="{{ route('produitSearch') }}" method="POST" class="form form-inline" role="search">
                        @csrf
                        <div class="card-body">
                            <input type="text" name="produits" class="form-control" placeholder="produits"> 
                            <button type="submit" class="btn btn-primary">Chercher</button>
                        </div>
                        </form>
                        <br/>
                        <br/>
                        <table class="table table-hover table-striped">
                                <thead>
                                <tr class="table-primary">
                                        <th>#</th>
                                        <th>Designation</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>
                                        <th>Marque</th>
                                        <th>Categorie</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($produits as $produits)   <!-- $produits est le variables qui se trouve dans la fonction index dans le contrôleur-->
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produits->designation }}</td>
                                        <td>{{ $produits->prix }} dt</td>
                                        <td>{{ $produits->quantite }}</td>
                                        <td>{{ $produits->marque }}</td>
                                        <td>{{ $produits->categorie->nomcat }}</td>
 
                                        <td>
                                            <a href="{{ url('/produit/' . $produits->id) }}" title="Consuler produit"><button class="btn bg-info-transparent"><i class="fe fe-eye" aria-hidden="true"></i> Consulter</button></a>
                                            <a href="{{ url('/produit/' . $produits->id . '/edit') }}" title="Modifier produit"><button class="btn bg-primary-transparent"><i class="si si-pencil" aria-hidden="true"></i> Modifier</button></a>
 
                                            <form method="POST" action="{{ url('/produit' . '/' . $produits->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn bg-danger-transparent" title="Supprimer produit" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fe fe-trash" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection