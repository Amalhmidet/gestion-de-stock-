
@extends('layouts.app')
@section('content')

    <div class="container">
        
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h6> Liste de Fournisseurs</h6></div>
                        @if ($message = Session :: get ('msg')) 
                            <div class="alert alert-success">
                            {{$message}}
                            </div>
                        @endif

                        @if ($message = Session :: get ('mssg')) 
                            <div class="alert alert-success">
                            {{$message}}
                            </div>
                        @endif

                        
                    
                    <div class="card-body">
                        <a href="{{ url('/fournisseur/create') }}" class="btn bg-primary-transparent" title="Add New fournisseur">
                        <i class="fe fe-plus"></i>  Ajouter un nouveau Fournisseur
                        </a>   
                        <form action="{{ route('fournisseurSearch') }}" method="POST" class="form form-inline" role="search">
                        @csrf
                        <div class="card-body">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                <input type="text" name="fournisseurs" class="form-control" placeholder="fournisseur"> 
                <button type="submit"class="btn btn-primary">Chercher</button>
                        </div>
                        </form>
                            
                        
                    </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr class="table-primary">
                                        <th>#</th>
                                        <th>Nom et prenom </th>
                                        <th>Adresse</th>
                                        <th>Numéro de téléphone</th>
                                        <th>Adresse Mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fournisseurs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom_prenom }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->num_tel }}</td>
                                        <td>{{ $item->email }}</td>
 
                                        <td>
                                            <a href="{{ url('/fournisseur/' . $item->id) }}" title="Consulter fournisseur"><button class="btn bg-info-transparent"><i class="fe fe-eye" aria-hidden="true"></i> Consulter</button></a>
                                            <a href="{{ url('/fournisseur/' . $item->id . '/edit') }}" title="Modifier fournisseur"><button class="btn bg-primary-transparent"><i class="si si-pencil" aria-hidden="true"></i> Modifier</button></a>
 
                                            <form method="POST" action="{{ url('/fournisseur' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn bg-danger-transparent" title="Supprimer fournisseur" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fe fe-trash" aria-hidden="true"></i> Supprimer</button>
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