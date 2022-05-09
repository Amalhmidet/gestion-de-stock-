<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Gt-stock', 'Gt-stock') }}</title>
 <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
 <head>

    	<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea – Codeigniter  Admin & Dashboard Template" name="description">
		<meta content="SPRUKO™" name="author">
		<meta name="keywords" content="admin, dashboard, admin template, codeigniter, codeigniter admin panel, codeigniter admin template, codeigniter dasdhboard, codeigniter dasdhboard template, codeigniter ui template, codeigniter framework, codeigniter admin dashboard, bootstrap, bootstrap 5 admin template, codeigniter bootstrap 5 template, codeigniter bootstrap 5 admin panel template.">

		<!-- Title -->
		<title>Gt-stock</title>

                <!--Favicon -->
        <link rel="icon" href="https://codeigniter.spruko.com/azea/ltr/assets/images/brand/favicon.ico" type="image/x-icon"/>

        <!--Bootstrap css -->
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Style css -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/dark.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />

        <!-- Animate css -->
        <link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />


			<!-- Data table css -->
			<link href="{{asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css')}}" rel="stylesheet" />
			<link href="{{asset('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css')}}"  rel="stylesheet">
			<link href="{{asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" />

			<!-- Slect2 css -->
			<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />


        <!-- P-scroll bar css-->
        <link href="{{asset('assets/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

        <!---Icons css-->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

        <!-- Simplebar css -->
        <link rel="stylesheet" href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}">

        <!--Sidemenu css -->
        <link href="{{asset('assets/css/sidemenu.css')}}" rel="stylesheet" id="sidemenu-theme">

        <!-- Color Skin css -->
        <link id="theme" href="{{asset('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

        <!-- INTERNAL Switcher css -->
        <link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>
	</head>
</head>

     <body class="app sidebar-mini  "> <!-- dark-menu sidebar-gone -->

       <div id="app">
         <!-- GLOBAL-LOADER -->
         <div id="global-loader">
             <img src="https://codeigniter.spruko.com/azea/ltr/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
         </div> 
         <!-- /GLOBAL-LOADER -->

         <!-- PAGE -->
         <div class="page">
             <div class="page-main">

                                 <!--aside open-->
                 <aside class="app-sidebar ">
                     <div class="app-sidebar__logo">
                         <a class="header-brand" href="/home"> <!-- /home lien de page d'acceuil -->
                            <!--<img src="images/logo.jpg" alt="logo" height="90px" width="100px">!-->
                             <img src="{{asset('assets/images/brand/capitol.png')}}"   height="60px" width="100px" alt="capitol logo" >
                                        
                         </a>
                     </div>


                   <ul class="side-menu app-sidebar3">
                    
                        <li class="slide">
                            <a class="side-menu__item"  href="/home"> 
                                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                            <span class="side-menu__label">Home</span></a>
                        </li>

                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="side-menu__icon" width="24" height="24" viewBox="0 0 16 16">
                                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                    <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                    <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
                                  </svg>
                            <span class="side-menu__label">Gestion</span><i class="angle fe fe-chevron-right"></i></a>
                            <ul class="slide-menu">
                                <li><a href="/fournisseur" class="slide-item">
                                   Fournisseurs</a></li>
                                <li><a href="/categorie" class="slide-item">
                                     Catégories</a></li>
                                <li><a href="/produit" class="slide-item">
                                     Produits</a></li>
                                <!-- <li><a href="" class="slide-item">
                                     Bons transfert</a></li> -->
                                    <li><a href="/bon_commande_frs" class="slide-item">
                                      Commandes Fournisseur</a></li>
                                    <li>
                                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                                            <span class="side-menu__label"><i class="fa-solid fa-store" style="margin-right:9px"></i>   Stock</span><i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="slide-menu">
                                            <li><a href="/input" class="slide-item">Entrées</a></li>
                                            <li><a href="/output" class="slide-item">Sorties</a></li>
                                        </ul>    
                                </li> 
                                <!-- <li><a href="" class="slide-item">
                                    Lignes de Bon de transfert</a></li> -->
                                    <!-- <li><a href="" class="slide-item">
                                    Familles</a></li> -->
                                </ul>
                                
                        </li>


                     
                     

                        
                    </ul>
                


                 </aside>
                 <!--aside closed-->
                                         <!--app header-->
                         <div class="app-header header main-header1">
                             <div class="container-fluid">
                                 <div class="d-flex">
                                 
                                     <a class="header-brand" href="index.html">
                                         <img src="{{asset('assets/images/brand/capitol.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                         <img src="{{asset('assets/images/brand/capitol.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
                                         <img src="{{asset('assets/images/brand/capitol.png')}}" class="header-brand-img mobile-logo" alt="Azea logo">
                                         <img src="{{asset('assets/images/brand/capitol.png')}}" class="header-brand-img darkmobile-logo" alt="Azea logo">
                                     </a>
                                     <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                                         <a class="open-toggle" href="javascript:void(0);">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
                                         </a>
                                     </div>
                                     <div class="mt-1 d-md-block d-none">
                                         <form class="form-inline" method="get" action="{{ url('/produit')}}">
                                             <div class="search-element" >
                                                 <input type="search" class="form-control header-search mobile-view-search" placeholder="Search…" aria-label="Search" tabindex="1" name="query">
                                                 <button class="btn btn-primary-color" type="submit">
                                                     <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                                                 </button>
                                             </div>
                                         </form>
                                     </div><!-- SEARCH -->

                                     <div class="d-flex order-lg-2 ms-auto main-header-end">
                                         <button  class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
                                             <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                                         </button>
                                         <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
                                             <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                                 <div class="d-flex order-lg-2">
                                                     <div class="dropdown d-lg-none d-flex responsive-search">
                                                         <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
                                                             <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                                                         </a>
                                                         <div class="dropdown-menu header-search dropdown-menu-start">
                                                             <div class="input-group w-100 p-2">
                                                                 <input type="text" class="form-control" placeholder="Search....">
                                                                 <button class="btn btn-primary-color" type="submit">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon p-1 mt-1" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                                                                 </button>
                                                             </div>
                                                         </div>
                                                     </div><!-- SEARCH -->
                                                     <div class="dropdown d-flex">
                                                         <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                             <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
                                                             <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
                                                         </a>
                                                     </div><!-- Theme-Layout -->
                                                     <div class="dropdown  header-fullscreen d-flex" >
                                                         <a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
                                                             <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg>
                                                         </a>
                                                     </div>

                                                    <!-- <div class="dropdown header-message d-flex">
                                                         <a class="nav-link icon" data-bs-toggle="dropdown">
                                                             <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"/></svg>
                                                             <span class="badge bg-success side-badge">5</span>
                                                         </a>
                                                         <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                                             <div class="dropdown-header">
                                                                 <h6 class="mb-0">Messages</h6>
                                                                 <span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
                                                             </div>
                                                         </div>
                                                     </div> -->
                                                    <!--  <div class="dropdown header-notify d-flex">
                                                         <a class="nav-link icon" data-bs-toggle="dropdown">
                                                             <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"/></svg><span class="pulse "></span>
                                                         </a>
                                                         <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                                             <div class="dropdown-header">
                                                                 <h6 class="mb-0">Notifications</h6>
                                                                 <span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
                                                             </div>
                                                         </div>
                                                     </div> -->

                                                     <div class="dropdown profile-dropdown d-flex">
                                                         <a href="{{asset('javascript:void(0);')}}" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
                                                             <span class="header-avatar1">
                                                                 <img src="{{asset('assets/images/users/2.jpg')}}" alt="img" class="avatar avatar-md brround">
                                                             </span>
                                                         </a>
                                                         <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                                             <div class="text-center">
                                                                 <!-- <div class="text-center user pb-0 font-weight-bold"> {"{ Auth::user()->name }}</div> --> 
                                                                 <span class="text-center user-semi-title">Responsable</span>
                                                                 <div class="dropdown-divider"></div>
                                                             </div>
                                                             <a class="dropdown-item d-flex" href="">
                                                                 <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
                                                                 <div class="fs-13">Profile</div>
                                                             </a>
                                                             <a class="dropdown-item d-flex" href="search.html">
                                                                 <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                                                                 <div class="fs-13">Settings</div>
                                                             </a>
                                                             <a class="dropdown-item d-flex" href="chat.html">
                                                                 <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h12v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z"/></svg>
                                                                 <div class="fs-13">Messages</div>
                                                             </a>
                                                             <a class="dropdown-item d-flex" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                 <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
                                                                 <div class="fs-13">Deconnexion</div>
                                                             </a>
                                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                         </div>
                                                     </div>

                                                 </div>
                                             </div>
                                         </div>
                                        <!-- <div class="d-flex">
                                             <a class="nav-link icon demo-icon">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="header-icon fa-spin" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"/><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"/></svg>
                                             </a>
                                         </div> -->
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!--/app header-->
                 <!-- App-Content -->


                 <div class="app-content main-content">
                   

                        <main class="py-4">
                            @yield('content')
                        </main>


                         <!-- Modal -->
                         <div aria-hidden="true" class="modal main-modal-calendar-event" id="modalcalendarEvent" role="dialog">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <nav class="nav nav-modal-event">
                                             <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-open"></i></a>
                                             <a class="nav-link" href="javascript:void(0);"><i class="icon ion-md-trash"></i></a>
                                             <a class="nav-link" data-bs-dismiss="modal" href="javascript:void(0);">
                                             <i class="icon ion-md-close"></i></a>
                                         </nav>
                                     </div>
                                     <div class="modal-body">
                                         <div class="row row-sm">
                                             <div class="col-sm-6">
                                                 <label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
                                                 <p class="event-left-date"></p>
                                             </div>
                                             <div class="col-sm-6">
                                                 <label class="tx-13 mg-b-2">End Date</label>
                                                 <p class="event-right-date"></p>
                                             </div>
                                         </div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
                                         <p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-primary wd-80" data-bs-dismiss="modal" href="#">Close</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- /Modal -->

                     </div>
                 </div>
                 <!-- main-content closed -->
             </div>

                             <!--Footer-->
                 <footer class="footer">
                     <div class="container">
                         <div class="row align-items-center flex-row-reverse">
                             <div class="col-md-12 col-sm-12 text-center">
                                 Copyright © 2022 <a href="javascript:void(0);">Application gestion de stock</a> developpé  <span class="fa fa-heart text-danger"></span>par : <a href="javascript:void(0);"> Capitol Soft </a> tout les droits reservés
                             </div>
                         </div>
                     </div>
                 </footer>
                 <!-- End Footer-->
         </div>
         <!-- End Page -->

                 <!-- Back to top -->
         <a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

         <!-- Jquery js-->
         <script src="{{asset('assets/js/jquery.min.js')}}"></script>

         <!-- Bootstrap5 js-->
         <script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
         <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

         <!--Othercharts js-->
         <script src="{{asset('assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

         <!-- Jquery-rating js-->
         <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

         <!--Sidemenu js-->
         <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

         <!-- P-scroll js-->
         <script src="{{asset('assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>
         <script src="{{asset('assets/plugins/p-scrollbar/p-scroll1.js')}}"></script>
         <script src="{{asset('assets/plugins/p-scrollbar/p-scroll.js')}}"></script>

         <!-- Simplebar JS -->
         <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>


             <!-- INTERNAL Select2 js -->
             <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
             <script src="{{asset('assets/js/select2.js')}}"></script>

             <!-- INTERNAL Full-calendar js-->
             <script src="{{asset('assets/plugins/fullcalendar/moment.min.js')}}"></script>
             <script src="{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
             <script src="{{asset('assets/js/app-calendar-events.js')}}"></script>
             <script src="{{asset('assets/js/app-calendar.js')}}"></script>
             <script src="https://kit.fontawesome.com/eca1e32229.js" crossorigin="anonymous"></script>


         <!-- Custom js-->
         <script src="{{asset('assets/js/custom.js')}}"></script>

         <!-- Switcher js -->
         <script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
     </body>

 <!-- Mirrored from codeigniter.spruko.com/azea/ltr/pages/calendar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 19:07:20 GMT -->
    </div>
 </html>



------
