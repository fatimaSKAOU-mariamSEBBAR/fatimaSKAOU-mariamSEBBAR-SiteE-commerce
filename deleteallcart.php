<?php
 session_start();
      //Put session start at the beginning of the file

require 'connection.php';




   $pf =$_SESSION['pf'];



    $bdd = new  PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
    $reponse11 = $bdd->query("SELECT  * FROM commande ");
 if($donnees= $reponse11->fetch()==null)   
{
                     header("Location: portfolio".$pf.".php");

 }
else {
    $reponse = $bdd->prepare("DELETE FROM commande ");
$reponse->execute();

                header("Location: portfolio".$pf.".php");

  
}

?>