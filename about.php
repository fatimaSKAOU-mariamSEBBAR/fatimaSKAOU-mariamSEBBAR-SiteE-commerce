 <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>PcosM-A Propos</title>
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
    



<!-- About section -->
	<section class="about-secton">
		<div class="container">
			<img src="img/about-img.jpg" class="about-img" alt="">
			<div class="row">
				<div class="col-lg-7 about-text">
					<h2>PcosM, la qualité du marque</h2>
					<p><strong>PcosM</strong> est une marque de produits cosmétiques professionnels depuis plus de 10 ans. Une gamme de maquillage et de soins à la pointe des tendances. Des produits sûrs et efficaces de la plus haute qualité. Nous suivons les exigences beautés des femmes/hommes de tout âge.
Notre gamme étendue et variée, permet à chaque femme/homme d’exprimer sa personnalité. Elle offre une multitude de couleurs, d'effets et de sensations qui conviennent à chaque style,chaque teint,chaque type de peau et à vos besoins personnels. Des produits de haute qualité à des prix très attractifs.

</p>
					<img src="img/signature.png" alt="">
				</div>
			</div>
		</div>
		<div class="about-img-box-warp">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 p-0">
						<div class="about-img-box">
							<img src="img/image-box.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6  d-lg-flex align-items-center p-0">
						<div class="about-text-box-warp">
							<div class="about-text">
								<h2>L'art de beauté</h2>
								<p>Influencée par la capitale de la mode, de l’art et du design, nos recherches sont basées sur l’originalité et sur des formules de qualité. Notre créativité c’est votre beauté ! 
Retrouvez tous nos produits dans nos concepts store, qui proposent plus de 1000 références dans les univers du corps, du visage, des yeux, des lèvres, des mains. Notre souci de la perfection nous amène à enrichir notre gamme de tous les accessoires nécessaires à un maquillage parfait.</p>
                            <img src="img/signature.png" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->



	

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


























