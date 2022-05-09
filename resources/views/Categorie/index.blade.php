@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                <div><br></div>
                @if ($message = Session :: get ('msg')) 
                    <div class="alert alert-dark">
                    {{$message}}
                    </div>
                @endif
                
                    <div class="card-header"><h6>Catégories</h6></div>
                    <div class="card-body">
                        <a href="{{ url('/categorie/create') }}" class="btn bg-primary-transparent" title="Add New categorie">
                            <i class="fe fe-plus" aria-hidden="true"></i> Ajouter un nouveau Catégorie
                        </a>
                        <form action="{{ route('categorieSearch') }}" method="POST" class="form form-inline" role="search">
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
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="categories" class="form-control" placeholder="categories"> 
                            <button type="submit" class="btn btn-primary">Chercher</button>
                        </div>
                        </form>
                        <br/>
                        <br/>
                        <table class="table table-hover table-striped">
                                <thead>
                                <tr class="table-primary">
                                        <th>#</th>
                                        <th>Nom de catégorie</th>
                                        <th>Description</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $categories)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $categories->nomcat}}</td>
                                        <td>{{ $categories->desccat }}</td>
 
                                        <td>
                                            <a href="{{ url('/categorie/' . $categories->id) }}" title="View Categorie"><button class="btn bg-info-transparent"><i class="fe fe-eye" aria-hidden="true"></i> Consulter</button></a>
                                            <a href="{{ url('/categorie/' . $categories->id . '/edit') }}" title="Edit Categorie"><button class="btn bg-primary-transparent"><i class="si si-pencil" aria-hidden="true"></i> Modifier</button></a>
 
                                            <form method="POST" action="{{ url('/categorie' . '/' . $categories->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn bg-danger-transparent" title="Delete categorie" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fe fe-trash" aria-hidden="true"></i> Supprimer</button>
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