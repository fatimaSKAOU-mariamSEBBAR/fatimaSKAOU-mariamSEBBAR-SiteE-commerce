<?php
require 'connection.php';


function validateMember()
{
    $valid = true;
    $errorMessage = array();
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $valid = false;
        }
    }
    
    if($valid == true) {
        if ($_POST['password'] != $_POST['repassword']) {
            $errorMessage[] = 'Passwords should be same.';
            $valid = false;
        }
        
        if (! isset($error_message)) {
            if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errorMessage[] = "Invalid email address.";
                $valid = false;
            }
        }
        
    }
    else {
        $errorMessage[] = "All fields are required.";
    }
    
    if ($valid == false) {
        return $errorMessage;
    }
    return;
}




function insertMemberRecord($name, $adresse, $tel, $email,  $password,$type)
{
    $passwordHash = md5($password);
    $bdd = new PDO('mysql:host=localhost;dbname=id12825075_pcosm;charset=utf8', 'id12825075_admin', 'pcosm123456');

    $reponse = $bdd->prepare("INSERT INTO user (nom_user,adresse_user,tel_user,email,password,type_user) VALUES('$name','$adresse','$tel','$email','$passwordHash','client')");
$reponse->execute();
}



if (empty($_POST["reg_user"])) {
     validateMember();
    
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);

echo $email;
echo $name;
echo $password;

        
            insertMemberRecord($name,"hhh",0, $email, $password,"client");
                header("Location: index.php");
            
        } else {
            $errorMessage[] = "User already exists.";
        }
        
        
        

?>