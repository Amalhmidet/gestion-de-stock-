@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        
            <div class="col-md-100">
                <div class="card">
                    <div class="card-header">produits</div>
                    <div class="card-body">
                        <a href="{{ url('/produit/create') }}" class="btn btn-success btn-sm" title="Add New produit">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter un nouveau Produit
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Designation</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>
                                        <th>TVA</th>
                                        <th>Marque</th>
                                        <th>Categorie</th>
                                        <th>Famille</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($produits as $produits)   <!-- $produits est le variables qui se trouve dans la fonction index dans le contrôleur-->
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produits->designation }}</td>
                                        <td>{{ $produits->prix }}</td>
                                        <td>{{ $produits->quantite }}</td>
                                        <td>{{ $produits->tva }}</td>
                                        <td>{{ $produits->marque }}</td>
                                        <td>{{ $produits->categorie }}</td>
                                        <td>{{ $produits->famille }}</td>
 
                                        <td>
                                            <a href="{{ url('/produit/' . $produits->id) }}" title="View produit"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/produit/' . $produits->id . '/edit') }}" title="Edit produit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/produit' . '/' . $produits->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete produit" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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