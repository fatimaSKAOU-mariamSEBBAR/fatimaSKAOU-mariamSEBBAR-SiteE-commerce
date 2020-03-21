 <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>PcosM</title>
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

    
    
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-social-links">
		
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hero-slider-item set-bg" data-setbg="img/slider-bg-1.jpg">
				<div class="hs-content">
					<div class="container">
						<h2>PcosM</h2>
						<a data-toggle="modal" data-target="#ModalSignup"  class="site-btn sb-white">S'inscrire</a>
						<a data-toggle="modal" data-target="#ModalSignin"  class="site-btn"  style="color: white">Se connecter</a>
					</div>
				</div>
			</div>
			<div class="hero-slider-item set-bg" data-setbg="img/slider-bg-1.jpg">
				<div class="hs-content">
					<div class="container">
						<h2>PcosM</h2>
						<a data-toggle="modal" data-target="#ModalSignup"  class="site-btn sb-white">S'inscrire</a>
						<a data-toggle="modal" data-target="#ModalSignin" class="site-btn"  style="color: white">Se connecter</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

<!-- Modal Signup-->
<div class="modal fade" id="ModalSignup" tabindex="-1" role="dialog" aria-labelledby="ModalSignup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PcosM-Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="wrapper" style="background-image: url('img/bg-registration-form-2.png');">
			<div class="inner" >
				<form action="signup.php" method="post">
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Nom obligatoire">
						<input class="input100" type="text" name="name" placeholder="Nom">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email obligatoire">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mot de passe obligatoire">
						<input class="input100" type="password" name="password" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
                    <div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Confirmation du mot de passe obligatoire">
						<input class="input100" type="password" name="repassword" placeholder="Confirmer le mot de passe">
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
						<button class="login100-form-btn" type="submit"  name="reg_user">
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PcosM-Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div class="wrapper" style="background-image: url('img/bg-registration-form-2.png');">
		<div class="inner" >
				<form action="login.php" method="post">
					<div class="login100-form-avatar">
						<img src="img/avatar-01.png" alt="AVATAR">
					</div>



					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email obligatoire">
                        
						<input class="input100" type="text" name="email1" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
<div class="container"></div>
                    <br>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Mot de passe obligatoire">
                        
						<input class="input100" type="password" name="password1" placeholder="Mot de passe">
						<span class="focus-input100"></span>
            
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10 text-center">
						<button class="login100-form-btn" type="submit" name="login">
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
    
    
	<!-- Quote section end -->
	<section class="quote-section">
		<div class="container">
			<div class="quote-text text-center">
				<p>"La simplicité est la clé de l'élégance."</p>
				<h3>-PcosM</h3>
			</div>
		</div>
	</section>
	<!-- Quote section end -->


	<!-- Portfilio section -->
	<div class="portfolio-section">
		<div class="portfolio-gallery">
			<div class="portfolio-item set-bg" data-setbg="img/works/1.png">
				<a href="img/works/1.png" class="portfolio-view">Crémes et gels</a>
			</div>
			<div class="portfolio-item --disable">
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/2.png">
				<a href="img/works/2.png" class="portfolio-view">Huiles</a>
			</div>
			<div class="portfolio-item --big set-bg" data-setbg="img/works/6.png">
				<a href="img/works/6.png" class="portfolio-view">Parfums</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/3.png">
				<a href="img/works/3.png" class="portfolio-view">Soins de visage</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/5.png">
				<a href="img/works/5.png" class="portfolio-view">PcosM</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/4.png">
				<a href="img/works/4.png" class="portfolio-view">Rasage</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/7.png">
				<a href="img/works/7.png" class="portfolio-view">Produits de coiffure</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/8.png">
				<a href="img/works/8.png" class="portfolio-view">Epilation</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/9.png">
				<a href="img/works/9.png" class="portfolio-view">Déodorants</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/10.png">
				<a href="img/works/10.png" class="portfolio-view">Savons</a>
			</div>
			<div class="portfolio-item set-bg" data-setbg="img/works/11.png">
				<a href="img/works/11.png" class="portfolio-view">Maquillage</a>
			</div>
		</div>
	</div>
	<!-- Portfilio section end -->


	<br><br><br>

	<!-- Newslatter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 text-white">
                    <br>
					<h6>Nouvelles Collections</h6>
				</div>
				<div class="col-lg-9">
					<form class="newsletter-form" style="width: auto">

						<input type="text" placeholder="Votre E-mail">
						<button type="button" class="btn btn-light" style="color: black">S'inscrire   </button>
					</form>	
				</div>
			</div>
		</div>
	</section>
	<!-- Newslatter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 order-md-1 order-2">
					<!--<img src="img/logo-dark.png" alt="" class="footer-logo">-->
                    <img src="img/logo.png" alt="" style="width:66px;height: 60px"class="footer-logo">
					<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 order-md-2 order-1">
					<ul class="footer-contact-list">
						<li><span>Address:</span>Main Str, no 23, New York</li>
						<li><span>Phone:</span>+546 990221 123</li>
						<li><span>Mail:</span>model@contact.com</li>
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
