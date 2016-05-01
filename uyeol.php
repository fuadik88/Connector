<?php

require ('uyelik.php');

$login = trim ($_POST['login']);
$pass = trim ($_POST['password']);
$repass = trim ($_POST['retype']);
$email = trim ($_POST['email']);

//Bosluk kontrolu

if(!$login || !$pass || !$repass || !$email){

   echo 'Please fill the blanks';
} else {
   if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
    echo 'Please enter valid email address';
  } else {
     if ($pass != $repass){
       echo "Passwords don't match";
     } else {
       $signup= mysql_query("INSERT INTO members SET
       login = '$login',
       password = '$pass',
       email = '$email'
       ");

       if($signup){
         echo 'Registration succesfull!';
       } else {
         echo 'Problem has occured, try again';
       }
     }
  }
}

 ?>
