<?php
 session_start();
      //Put session start at the beginning of the file

require 'connection.php';






function insertCommande($datecmd, $idproduit, $idclient, $qtt)
{
    $bdd = new  PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');

    $reponse = $bdd->prepare("INSERT INTO commande (date_commande,id_produit,id_client,qtt_commande) VALUES('$datecmd','$idproduit','$idclient','$qtt')");
$reponse->execute();
}

function insertCommandeFile($datecmd, $idproduit, $qtt)
{
   $myfile = fopen("commande.txt", "a+") or die("Unable to open file!");
    $bdd = new  PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');
    $reponse11 = $bdd->query("SELECT  * FROM produit where id_produit=$idproduit");
 if($donnees= $reponse11->fetch())   
{
$txt = "\n".$idproduit."|".$donnees['nom_produit']."|".$datecmd."|".$qtt;

}
fwrite($myfile, $txt);
fclose($myfile);
}

function deleteCommandes($pf)
{
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
}


if ($_POST["envoi"]=="add") {
    
    $datecmd=date("yy-m-j");
    $idproduit =$_POST["id"];
    $qtt = $_POST["qtt"];
    $idclient=0;
    $pf =$_SESSION['pf'];

        
            insertCommande($datecmd, $idproduit, $idclient, $qtt);
                header("Location: portfolio".$pf.".php");
            
        }
else if ($_POST["envoi"]=="save") 
{
    
    $datecmd=date("yy-m-j");
    $idproduit =$_POST["id"];
    $qtt = $_POST["qtt"];
    $idclient=0;
    $pf =$_SESSION['pf'];
    
    insertCommandeFile($datecmd, $idproduit, $qtt);
   header("Location: portfolio".$pf.".php");

    
}
else if ($_POST["envoi"]=="clear") 
{
      $pf =$_SESSION['pf'];

    deleteCommandes($pf);
}
else {
            $errorMessage[] = ".";
        }
        

  
        

?>