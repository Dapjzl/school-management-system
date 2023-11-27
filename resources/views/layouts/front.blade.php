<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="college, campus, university, courses, school, educational">
    <meta name="description" content="ATENA - College, University and campus template">
    <meta name="author" content="Ansonika">
    <title>@yield('title')</title>
    <base href="{{\URL::to('/')}}" />

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="front/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="front/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="front/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="front/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="front/css/base.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
	<link href="front/layerslider/css/layerslider.css" rel="stylesheet">
            <link href="front/css/tabs.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader">
	<div class="pulse"></div>
</div><!-- Pulse Preloader -->

    <!-- Header================================================== -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="/"><img src="front/img/logo.png" style="display: block; width: 200px; height: 67px; margin-top: -13px;"  alt="Atena" data-retina="true"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="front/img/logo_mobile.png" width="125" height="40" alt="Atena" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li><a href="/" >Home </a></li>
                        <li><a href="/about" >About </a></li>
                        <li><a href="/programmes" >Programmes </a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Academic <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="/admissions">Apply Now</a></li>
                                <li><a href="/continueafter">Continue Application</a></li>
                            </ul>
                            </li>
                        <li><a href="/contact" >Get In Touch </a></li>
                        {{-- <li class="submenu">
                        <a href="javascript:void(0);" class="show-submenu">Academic <i class="icon-down-open-mini"></i></a>
                        <ul>
                            <li><a href="diploma.html">Diploma courses</a></li>
                            <li><a href="graduate.html">Graduate courses</a></li>
                            <li><a href="master.html">Master courses</a></li>
                            <li><a href="apply_online.html">Apply online</a></li>
                            <li><a href="staff.html">Staff</a></li>
                        </ul>
                        </li> --}}

                        <li><a href="tour.html">Tour</a></li>
                        <li><a href="/login" >Login</a></li>
                        <li><a href="#search" id="search_bt"><i class=" icon-search"></i><span>Search</span></a></li>
                    </ul>
                </div><!-- End main-menu -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

	<!-- Yield Content -->
    @yield('content')
    <!-- Yield Content -->
    <footer>
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-sm-3">
                    <p id="logo_footer">
                        <img src="front/img/logo.png" width="125" height="40" alt="Atena" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Academic</h4>
                    <ul>
                        <li><a href="#">Plans of study</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Admissions</a></li>
                        <li><a href="#">Staff</a></li>
                        <li><a href="#">Students</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Plan a visit</a></li>
                    </ul>
                    <ul id="contacts_footer">
                        <li>Info line - <a href="tel://033284322">+0332 84322456</a></li>
                        <li>Email - <a href="#">info@atena.com</a> / <a href="#">office@atena.com</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->
    <div id="copy">
            <div class="container">
                 © College {{date('Y')}} - All rights reserved.
            </div>
     </div><!-- End copy -->



 <!-- Login modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myLogin">
					<input type="text" class="form-control form-white" placeholder="Username">
					<input type="text" class="form-control form-white" placeholder="Password">
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_1" id="check_1" name="check_1" />
							<label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>

<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="#" class="popup-form" id="myRegister">
					<input type="text" class="form-control form-white" placeholder="Name">
					<input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password">
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
	</div>

  <!-- Search modal -->
 <div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" >
        <button type="submit" class="button">Search</button>
    </form>
</div>

<!-- Common scripts -->
<script src="front/js/jquery-1.11.2.min.js"></script>
<script src="front/js/common_scripts_min.js"></script>
<script src="front/js/functions.js"></script>
<script src="front/assets/validate.js"></script>

<!-- Specific scripts -->
<script src="front/layerslider/js/greensock.js"></script>
 <script src="front/layerslider/js/layerslider.transitions.js"></script>
<script src="front/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (Session::has('success'))
    <script>
        swal("Operation Successful", "{!!Session::get('success') !!}" ,"success" ,{
            button:"OK",
        });
    </script>
@endif
@if (Session::has('error'))
    <script>
        swal("Oops", "{!!Session::get('error') !!}" ,"error" ,{
            button:"OK",
        });
    </script>
@endif
<script type="text/javascript">
    $(document).ready(function(){
		'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<script src="front/js/tabs.js"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
</body>
</html>
