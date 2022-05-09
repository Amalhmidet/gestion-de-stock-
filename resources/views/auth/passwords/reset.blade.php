
<!DOCTYPE html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from codeigniter.spruko.com/azea/ltr/pages/reset-password-3 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 19:09:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea – Codeigniter  Admin & Dashboard Template" name="description">
		<meta content="SPRUKO™" name="author">
		<meta name="keywords" content="admin, dashboard, admin template, codeigniter, codeigniter admin panel, codeigniter admin template, codeigniter dasdhboard, codeigniter dasdhboard template, codeigniter ui template, codeigniter framework, codeigniter admin dashboard, bootstrap, bootstrap 5 admin template, codeigniter bootstrap 5 template, codeigniter bootstrap 5 admin panel template.">

		<!-- Title -->
		<title>Azea – Codeigniter  Admin & Dashboard Template</title>

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

<!---Icons css-->
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

<!-- Color Skin css -->
<link id="theme" href="{{asset('assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

    </head>

	<body class="error-bg h-100vh">

		
            <div class="register-3">

        
			<!-- Loader -->
			<div id="global-loader">
				<img src="https://codeigniter.spruko.com/azea/ltr/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /Loader -->

        	
						<div class="page">
							<div class="page-content">
								<div class="container">
									<div class="row">
										<div class="col mx-auto">
											<div class="row justify-content-center">
												<div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
													<div class="text-center mb-5 mt-0">
														<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
													</div>
													<div class="card-group mb-0">
														<div class="card bg-primary text-white border-0 br-7 p-2">
															<div class="card-body mb-0">
																<div class="text-center mb-5">
																	<h1 class="mb-2">Mot de passe</h1>
																	<a href="javascript:void(0);" class="text-white">Créer un nouveau mot de passe</a>
																</div>
															<form method="POST" action="{{ route('password.update') }}">
                                                                @csrf
                                                                <input type="hidden" name="token" value="{{ $token }}">
																<div class="input-group mb-4">
																	<div class="input-group" id="email" >
																			<a href="#" class="input-group-text">
																			<i class="fe fe-mail"></i>
																			</a>
																		<input id="email" type="email"class="form-control   @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
																</div>
																<div class="input-group mb-4">
																	<div class="input-group" id="Password-toggle1">
																			<a href="#" class="input-group-text">
																			<i class="fe fe-eye" aria-hidden="true"></i>
																			</a>
																		<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
																	
                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
																</div>
																<div class="input-group mb-4">
																	<div class="input-group" id="Password-toggle2">
																			<a href="#" class="input-group-text">
																			<i class="fe fe-eye" aria-hidden="true"></i>
																			</a>
																		<input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" required autocomplete="new-password">
																	</div>
																</div>
																<div class="form-group">
																	<label class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input" />
																		<span class="custom-control-label text-white-50">Remember Me</span>
																	</label>
																</div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn btn-white btn-block text-primary d-grid px-4 font-weight-bold">Réinitialiser</button>
                                                                    </div>
                                                                </div>
															</form>
															
															<div class="text-center pt-4">
																<div class="font-weight-normal fs-14 text-white-50">Vous avez déja un compte ? <a class="btn-link font-weight-bold anchors text-white" href="{{ url ('/') }}">Se connecter</a></div>
															</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

        		<!-- Jquery js-->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>

		<!-- Bootstrap5 js-->
		<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Jquery-rating js-->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!--Othercharts js-->
		<script src="{{asset('assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>		

		
			<!-- Show Password -->
			<script src="{{asset('assets/js/bootstrap-show-password.min.js')}}"></script>

		
		<!-- Custom js-->
		<script src="{{asset('assets/js/custom.js')}}"></script>
    </body>

<!-- Mirrored from codeigniter.spruko.com/azea/ltr/pages/reset-password-3 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jan 2022 19:09:21 GMT -->
</html>


