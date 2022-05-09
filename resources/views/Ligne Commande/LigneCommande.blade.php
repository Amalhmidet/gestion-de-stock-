    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('content')
<body>


<div class="container mt-2">
  <form method="get" action="/generate/{{$bon_commande_frs->id}}">
    <div class="row">
        <div class="col-md-12 card-header text-center font-weight-bold">
          <h2>Lignes de commandes</h2>
        </div>
        <div><br><div>
        <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Add</button></div>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produit</th>
                  <th scope="col">Prix unitaire</th>
                  <th scope="col">Quantité</th>
                  <th scope="col">Montant hors taxe</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($bon_commande_frs->lignes_commandes as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->produit }}</td>
                    <td>{{ $produit->pu }}</td>
                    <td>{{ $produit->qte }}</td>
                    <td>{{ $produit->mont_Ht }}</td>
                    <td>
                     <!-- <a href="{{ url('/Ligne_commandes/' . $produit->id . '') }}" class="btn btn-primary edit" data-id="{{ $produit->id }}">Edit</a> -->
                      <a href="{{ url('/Ligne_commandes/' . $produit->id . '') }}" class="btn btn-primary delete" >Delete</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Voir La Commande</button>
    <button type="submit" id="envoimail" class="btn btn-primary btn-lg btn-block">Envoyer La Commande</button>    
  </form>
</div>

<!-- boostrap model -->
    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxBookModel"></h4>
          </div>
          <div class="modal-body">
            <form action="{{ action('App\Http\Controllers\LigneCommandeController@store') }}" class="form-horizontal" method="POST">
              @csrf
              <div class="form-group">
                <label for="produit" class="col-sm-2 control-label">Produit</label>
                <select class="form-control"  id="produit" value="" placeholder="Entrer produit" name="produit" required>
                  @foreach($produits as $produit)
                    <option name="produit" value="{{ $produit->designation}}" >{{ $produit->designation}} ({{$produit->quantite}})</option>
                  @endforeach
                </select>
              </div>
              <input style="display:none" name="bon_commande_frs_id" id="bon_commande_frs_id" value="{{$bon_commande_frs->id}}" >
              <div class="form-group">
                <label class="col-sm-2 control-label">Quantité</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="qte" name="qte" placeholder="Entrer quantité" value="" required="">
                </div>
              </div>

              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
<!-- end bootstrap model -->
<script type="text/javascript">
    $('#addNewBook').click(function () {
       $('#addEditBookForm').trigger("reset");
       $('#ajaxBookModel').html("Add Book");
       $('#ajax-book-model').modal('show');
    });
    $('#envoimail').click(function(){
      alert('Ce bon de commande a été envoyé avec succèes au fournisseur');
    })

</script>
@endsection