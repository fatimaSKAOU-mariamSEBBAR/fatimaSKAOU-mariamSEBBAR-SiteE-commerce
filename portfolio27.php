<?php session_start() ?> <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Pcosm-Produits</title>
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
    	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>



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
				<li><a href="portfolio.php">Produits</a></li>
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
    



	

		



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
			</div>
			<ul class="product-filter-menu">
				  <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
$i=0;
    $reponse = $bdd->query("SELECT * FROM categorie");
while($donnees= $reponse->fetch())   			
{
    if($donnees['nom_categorie']=='MAQUILLAGE/DEMAQUILLAGE')
    {
         ?>
				<li><a href="portfolio<?php echo $i ?>.php" style="color: purple"><?php echo $donnees['nom_categorie'] ?></a></li>
                <?php
             $i++;
    }
    else{
                ?>
                
				<li><a href="portfolio<?php echo $i ?>.php" ><?php echo $donnees['nom_categorie'] ?></a></li>
                <?php
                    $i++;
    }
}
                    ?>
				

			</ul>
            <ul class="product-filter-menu">
                
				               <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
$i=19;
    $reponse = $bdd->query("SELECT * FROM sous_categorie WHERE id_categorie=5");
while($donnees= $reponse->fetch())  		
{
    if($donnees['nom_scategorie']=='Accessoires de beauté')
    {
         ?>
                				
                <li style="	margin: 0;"><a href="portfolio<?php echo $donnees['id_categorie']-1 ?>.php" style=" font-size: 11px;"><?php echo $donnees['nom_scategorie'] ?></a></li>
                <?php
    }
    else if($donnees['nom_scategorie']=='Gloss')
    {
        
        ?>
                <li  style="	margin: 0;"><a href="portfolio<?php echo $i ?>.php"  style="font-size: 11px; color:purple"><?php echo $donnees['nom_scategorie'] ?></a></li>
                <?php
            $i++;
    }
        else{
                ?>
                
				<li  style="	margin: 0;"><a href="portfolio<?php echo $i ?>.php"  style="font-size: 11px"><?php echo $donnees['nom_scategorie'] ?></a></li>
                <?php
                    $i++;
    }
}
                    ?>
			</ul>
			<div class="row">
		 <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
$i=0;
    $reponse = $bdd->query("SELECT * FROM produit WHERE id_scategorie=12");
while($donnees= $reponse->fetch())   
{
        $reponse2 = $bdd->query("SELECT * FROM sous_categorie WHERE id_scategorie=12");
    while($donnees2= $reponse2->fetch())   
{
            $ii= $donnees2['id_categorie'];

     $reponse3 = $bdd->query("SELECT * FROM categorie WHERE id_categorie=$ii");
        while($donnees3= $reponse3->fetch())   
{

   ?>
                                <div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="img/Produits/<?php echo  $donnees['photo_produit'] ?>" alt="">
							<div class="pi-links">
								<a href="#" class="add-card" type="button" data-toggle="modal" data-target="#modalQuickView<?php echo $donnees['id_produit'] ; 
            $_SESSION['pf'] = "27"; ?>"><i class="fa fa-shopping-bag"></i><span>Add to Cart</span></a>
							</div>
						</div>
						<div class="pi-text">
							<h6><?php echo $donnees['prix'] ?>,00dh</h6>
							<p><?php echo $donnees['nom_produit'] ?></p>
						</div>
					</div>
				</div>
                
                <!-- modal -->
                <container>
                                      <form action="addtocart.php" method="post">

	<div class="modal fade" id="modalQuickView<?php echo $donnees['id_produit'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"  style="overflow-y: scroll; height:700px;"  >
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
              <!--Carousel Wrapper-->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100"
                      src="img/Produits/<?php echo  $donnees['photo_produit'] ?>"
                      alt="First slide">
                  </div>
                  
                </div>
                <!--/.Slides-->
               
               
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-lg-7">
              <h2 class="h2-responsive product-name">
                <strong><?php echo $donnees['nom_produit'] ; ?></strong>
              </h2>
              <h4 class="h4-responsive">
                <span class="green-text">
                  <strong><?php echo $donnees['prix'] ?>,00dh</strong>
                   
                </span>
              </h4>
  <br><br>
              <!--Accordion wrapper-->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
  
             
                <!-- Accordion card -->
                <div class="card">
  
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingTwo2">
                    <a  style="text-decoration:none" class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                      aria-expanded="false" aria-controls="collapseTwo2">
                      <h5 class="mb-0">
                        <?php echo $donnees3['nom_categorie'];  ?> <i class="fa fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
  
                  <!-- Card body -->
                  <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                    data-parent="#accordionEx">
                    <div class="card-body">
                   <p><?php echo $donnees['description'];  ?></p>
                    </div>
                  </div>
  
                </div>
                <!-- Accordion card -->
  
               
  
              </div>
              <!-- Accordion wrapper -->
  
  
              <!-- Add to Cart -->
              <div class="card-body">
                 <div class="row">
                  <div class="col-md-6 form-group ">
                      <input type="text" class="md-form mdb-select  dropdown-primary form-control" placeholder ="Quantité"  min="1" name="qtt">
                  </div>
                  
                  
                </div> 
                                        <input type="hidden" placeholder =""  name="id" value="<?php echo $donnees['id_produit'];  ?>">

              </div>
              <!-- /.Add to Cart -->
            </div>
              <div >
  
                  <button type="button" class="btn btn-success" data-dismiss="modal"  style="background-color:black" >Close          
                      <i class="fa fa-times" aria-hidden="true"></i>                      
</button>
                   <button class="btn btn-primary" style="background-color:black"   type="submit" name="envoi" value="clear" >Clear
    
                    <i class="fa fa-trash" aria-hidden="true"></i>                      
                  </button>
                  
                     <button class="btn btn-primary" style="background-color:black"  type="submit" name="envoi" value="save" >Save
    
                    <i class="fa fa-save" aria-hidden="true"></i>                      
                  </button>
                     <button class="btn btn-primary" style="background-color:black"     data-dismiss="modal" data-toggle="modal" data-target="#modall"  >View
    
                    <i class="fa fa-eye" aria-hidden="true"></i>
                      
                  </button>
                     <button class="btn btn-primary" style="background-color:black" type="submit" name="envoi" value="add" >Add
    
                    <i class="fa fa-plus" aria-hidden="true"></i>
                      
                  </button>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        </form>
                   
                    </container>
                
	<!-- /modal -->
                <?php
}
    }}
               
                    ?>

			
			
			
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                    <!-- modal -->
                <container>

	<div class="modal fade" id="modall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"  style="overflow-y: scroll; height:700px;"  >
        <div class="modal-body">
             <?php    $bdd = new PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
    $reponse = $bdd->query("SELECT * FROM commande");
               
                
if($donnees= $reponse->fetch()==null)   
{
    ?>
            <h5>Aucun produit au panier!</h5>
             <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            <?php
}
        else{
            ?>
            
            <table style="border: thin solid black;
border-collapse: collapse;
width: 100%;">
  <tr>
      <th style="font-family: monospace;
width: 20%;height:60px;
                 text-align: center;
background-color:black;
color:white;
padding: 5px;">Photo</th>
      
      <th style="font-family: monospace;
width: 20%;height:60px;
                 text-align: center;
background-color:black;
color:white;
padding: 5px;">Catégorie</th>
      
    <th style="font-family: monospace;
width: 20%;height:60px;
               text-align: center;
background-color:black;
color:white;
padding: 5px;">Produit</th>
      
    <th style="font-family: monospace;
width: 10%;height:60px;
               text-align: center;
background-color:black;
color:white;
padding: 5px;">Prix</th>
      
      <th style="font-family: monospace;
width: 10%;height:60px;
                 text-align: center;
background-color:black;
color:white;
padding: 5px;">Quantité</th>
      
      <th style="font-family: monospace;
width: 30%;height:60px;
                 text-align: center;
background-color:black;
color:white;
padding: 5px;">Prix Total</th>
  </tr>
                  
         
                          <?php 
                  $reponse = $bdd->query("SELECT * FROM commande");
                $iii=0;
                $iii2=0;
while($donnees= $reponse->fetch())   
{
                $ii= $donnees['id_produit'];

        $reponse2 = $bdd->query("SELECT * FROM produit WHERE id_produit=$ii");
    while($donnees2= $reponse2->fetch())   
{
            $ii2= $donnees2['id_scategorie'];

     $reponse3 = $bdd->query("SELECT * FROM sous_categorie WHERE id_scategorie=$ii2");
        while($donnees3= $reponse3->fetch())   
{
              $ii3= $donnees3['id_categorie'];

     $reponse4 = $bdd->query("SELECT * FROM categorie WHERE id_categorie=$ii3");
              while($donnees4= $reponse4->fetch())   
{
    ?>

<tr style="border: thin solid black;
">

            <td style="font-family: sans-serif;
border: thin solid black;
width: 20%;
padding: 5px;
text-align: center;
background-color: #ffffff;"> <img  src="img/Produits/<?php echo  $donnees2['photo_produit'] ?>" alt="First slide" style="width 80px;height:80px;"></td>
      
      
      <td style="font-family: sans-serif;
border: thin solid black;
width: 20%;
padding: 5px;
text-align: center;
background-color: #ffffff;"><?php echo $donnees4['nom_categorie']?></td>
      
    <td style="font-family: sans-serif;
border: thin solid black;
width: 20%;
padding: 5px;
text-align: center;
background-color: #ffffff;"><?php echo $donnees2['nom_produit']?></td>
      
    <td style="font-family: sans-serif;
border: thin solid black;
width: 10%;
padding: 5px;
text-align: center;
background-color: #ffffff;"><?php echo $donnees2['prix']?>,00</td>
      
       <td style="font-family: sans-serif;
border: thin solid black;
width: 10%;
padding: 5px;
text-align: center;
background-color: #ffffff;"><?php echo $donnees['qtt_commande']?></td>
      
    <td style="font-family: sans-serif;
border: thin solid black;
width: 30%;
padding: 5px;
text-align: center;
background-color: #ffffff;"><?php $iii =($donnees2['prix']*$donnees['qtt_commande']);         $iii2=$iii2+$iii;
echo $donnees2['prix']*$donnees['qtt_commande'] ; $_SESSION['idp'] = $donnees['id_produit']; $_SESSION['dp'] = $donnees['date_commande']; $_SESSION['idu'] = $donnees['id_client'];?>,00</td>
    
  
  </tr>

<br>

<?php
                
              }}}}
        
?>

      </table>
            <br>

            <h5 style="text-align:right;">TOTAL: <?php  echo $iii2;?>,00DH</h5>
            <?php
                
              }
        
?>
          </div>
        </div>
      </div>
    </div>
  
                    </container>
	<!-- /modal -->
                
                
                
			
			</div>
			
		</div>
	</section>
	<!-- Product filter section end -->


<!-- Comment section -->
	<section class="contact-section">
		<div class="container">
			<div class="text-center contact-title">
				<h2>Laissez un commentaire</h2>
			</div>
			<form class="contact-form" style="width: auto">
				
					<div class="col-lg-12">
						<input type="email" placeholder="E-mail">
						<textarea placeholder="Commentaire"></textarea>
						<div class="text-center">
							<button type="button" class="btn btn-dark">Envoyer</button>
						</div>
					</div>
			</form>
		</div>
	</section>
	<!-- Comment section -->
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
