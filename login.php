<?php


function loginMember($email, $password)
{
    $passwordHash = md5($password);
    $bdd = new  PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');

    $reponse = $bdd->query("SELECT * FROM user WHERE email= '$email' AND password='$passwordHash' AND type_user='client'");
while($donnees= $reponse->fetch())    	 			
{
    return 1;
}
}

   if (empty($_POST["login"])) {
    
    $password1 = filter_var($_POST["password1"], FILTER_SANITIZE_STRING);
    $email1 = filter_var($_POST["email1"], FILTER_SANITIZE_STRING);

        
        if(    loginMember($email1, $password1)==1)
        {
                header("Location: index.php");
        }
    else{
        echo 'error';
    }
        } else {
            $errorMessage[] = "User already exists.";
        }
      
      ?>