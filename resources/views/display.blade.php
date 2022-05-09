<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/app.css">
<?php
//calcul du Montant Hors Taxe
$total_hors_taxe = 0;
foreach ($bon_commande_frs->lignes_commandes as $produit){
   $total_hors_taxe += $produit->qte * $produit->pu; 
}
$total_TTC = $total_hors_taxe + $total_hors_taxe * (19/100);
?>
<div class="container" >
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-center f-w-600">
            <span class="pull-right hidden-print">
               <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            Bon de Commande N° {{ $bon_commande_frs->id}}
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small class="text-info">from</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">Nom de l'entreprise</strong><br>
                  Adresse de l'entreprise <br>
                  Email de l'entreprise <br>
                  Phone: (216) Téléphone de l'entreprise<br>
               </address>
            </div>
            <div class="invoice-to">
               <small class="text-info">to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$bon_commande_frs->fournisseur['nom_prenom'] }}</strong><br>
                  {{$bon_commande_frs->fournisseur['adresse'] }}<br>
                  {{$bon_commande_frs->fournisseur['email'] }}<br>
                  Phone: (216) {{$bon_commande_frs->fournisseur['num_tel'] }}<br>
               </address>
            </div>
            <div class="invoice-date">
               <small class="text-info">Date de confirmation : </small>
               <div class="text-danger">{{$bon_commande_frs->dat_com}}</div>
               <small class="text-info">Date d'expiration : </small>
               <div class="text-danger">{{$bon_commande_frs->dat_exp}}</div>
               <br>
               <div class="invoice-detail">
                  Service Produit
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th class="text-center" width="45%">Désignation</th>
                        <th class="text-center" width="10%">Prix unitaire</th>
                        <th class="text-right" width="20%">Quantité</th>
                        <th class="text-right" width="20%">Montant Hors Taxe</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($bon_commande_frs->lignes_commandes as $produit)      
                        <td class="text-center">{{ $produit->produit }} </td>
                        <td class="text-center">{{ $produit->pu }} DT</td>
                        <td class="text-right">{{ $produit->qte }} </td>
                        <td class="text-right">{{ $produit->mont_Ht }} DT</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small>Total Hors Taxe</small>
                        <span class="text-inverse">{{$total_hors_taxe}} DT</span>
                     </div>
                     <div class="sub-price">
                        <i class="fa fa-plus text-muted"></i>
                     </div>
                     <div class="sub-price">
                        <small>TVA (19%)</small>
                        <span class="text-inverse">{{$total_hors_taxe*(19/100)}} DT</span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>Total TTC</small> <span class="f-w-600">{{$total_TTC}} DT</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            * Faites tous les chèques à l'ordre de [Nom de l'entreprise]<br>
            * le paiment se fait avant la date d'expiration<br>
            * Si vous avez une question veuillez nous contacter sur [Nom de l'entreprise, Téléphone de l'entreprise , Email de l'entreprise]
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="fs-5 text-center m-b-5 f-w-600">
               Merci pour votre Confiance
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> companyWebSite.com</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> companyEmail@gmail.com</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
    <style>
    body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
</style>