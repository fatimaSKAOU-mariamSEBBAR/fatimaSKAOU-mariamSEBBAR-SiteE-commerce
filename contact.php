<?php session_start() ?> <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>PcosM-Contact</title>
	<meta charset="UTF-8">
	<meta name="description" content="Glamour Fashion HTML Template">
	<meta name="keywords" content="glamour, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="sp-line"></div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<ul class="main-menu-left site-menu-style">      
                <br>
				<li><a href="index.php">Acceuil</a></li>
				<li><a href="about.php">A propos</a></li>
				<li><a href="portfolio0.php">Produits</a></li>
                <li><a href="contact.php">Contact</a></li>
			</ul>
			<p class="site-logo">
				<img src="img/logo.png" alt="" style="width:66px;height: 60px"><br><span style="color: white">PcosM</span>
                
			</p>
			<ul class="main-menu-right site-menu-style">
                <br>
				<li><a data-toggle="modal" data-target="#ModalSignup" style="color: white">S'inscrire</a></li>
                <li><a data-toggle="modal" data-target="#ModalSignin" style="color: white">Se connecter</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->

    
 

<!-- Modal Signup-->
<div class="modal fade" id="ModalSignup" tabindex="-1" role="dialog" aria-labelledby="ModalSignup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"  style="overflow-y: scroll; height:700px;"  >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PcosM-Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="wrapper" style="background-image: url('img/bg-registration-form-2.png');">
			<div class="inner" >
				<form action="">
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Nom obligatoire">
						<input class="input100" type="text" name="username" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email obligatoire">
						<input class="input100" type="email" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mot de passe obligatoire">
						<input class="input100" type="password" name="username" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Confirmation du mot de passe obligatoire">
						<input class="input100" type="password" name="username" placeholder="Confirmer le mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="checkbox">
						<label style="color: black">
                            <br>
							<input type="checkbox"> J'accepte les Terms d'Usage & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							S'inscrire
						</button>
					</div>

                    
				</form>
			</div>
		</div>
      </div>
     
    </div>
  </div>
</div>
    
    
    
    <!-- Modal Signin -->
<div class="modal fade" id="ModalSignin" tabindex="-1" role="dialog" aria-labelledby="ModalSignin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"  style="overflow-y: scroll; height:700px;"  >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PcosM-Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div class="wrapper" style="background-image: url('img/bg-registration-form-2.png');">
		<div class="inner" >
				<form action="">
					<div class="login100-form-avatar">
						<img src="img/avatar-01.png" alt="AVATAR">
					</div>



					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email obligatoire">
                        
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
<div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mot de passe obligatoire">
                        
						<input class="input100" type="password" name="pass" placeholder="Mot de passe">
						<span class="focus-input100"></span>
            
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10 text-center">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
                        <br>
						<a href="#" class="txt1" style="color: black">
				Mot de passe oublié ?
						</a>
					</div>

				
				</form>
			</div>

	</div>
      </div>
    </div>
  </div>
</div>
    



	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="text-center contact-title">
				<h2>Contactez-Nous</h2>
			</div>
			<form class="contact-form" style="width: auto">
				<div class="row">
					<div class="col-lg-6">
						<input type="text" placeholder="Nom">
					</div>
					<div class="col-lg-6">
						<input type="text" placeholder="E-mail">
					</div>
					<div class="col-lg-12">
						<input type="text" placeholder="Sujet">
						<textarea placeholder="Message"></textarea>
						<div class="text-center">
							<button type="button" class="btn btn-dark">Envoyer</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- Contact section -->


	

	<!-- Footer section -->
	<footer class="footer-section" style="background-color: black">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 order-md-1 order-2">
					<!--<img src="img/logo-dark.png" alt="" class="footer-logo">-->
                    <img src="img/logo.png" alt="" style="width:66px;height: 60px"class="footer-logo">
					<div class="copyright" style="color: white">
Copyright &copy;<script style="color: white">document.write(new Date().getFullYear());</script> All rights reserved 
</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 order-md-2 order-1">
					<ul class="footer-contact-list" >
						<li style="color: white"><span style="color: white">Address:</span>Main Str, no 23, New York</li>
						<li style="color: white"><span style="color: white">Phone:</span>+546 990221 123</li>
						<li style="color: white"><span style="color: white">Mail:</span>model@contact.com</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->
	       

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>


























