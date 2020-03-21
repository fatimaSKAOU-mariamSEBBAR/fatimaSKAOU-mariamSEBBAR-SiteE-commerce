<?php
 session_start();
      //Put session start at the beginning of the file

require 'connection.php';




    $dp =$_SESSION['dp'];
    $idu =$_SESSION['idu'];
    $idp =$_SESSION['idp'];
   $pf =$_SESSION['pf'];


  $myfile = fopen("enregistrementfile.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

                header("Location: portfolio".$pf.".php");

  
        

?>