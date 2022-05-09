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
        <body class="error-bg h-100vh">
         
             

   
                   
            
                        <main class="py-4">
                            @yield('content')
                        </main>

         
                        

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
         
         <!-- End Page -->
</body>
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


         <!-- Custom js-->
         <script src="{{asset('assets/js/custom.js')}}"></script>

         <!-- Switcher js -->
         <script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
     </body>

 <!-- Mirrored from codeigniter.spruko.com/azea/ltr/pages/calendar by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 19:07:20 GMT -->
    </div>
 </html>



------
