<?php

 $user = "";

 $pass = "";

 $validated = false;



 if ($_POST)

 {

 $user = $_POST['username'];

 $pass = $_POST['password'];

 }



 session_start();

 if($user!=""&&$pass!="")

 {

 if($user=="jsmith"&&$pass=="letmein") $validated = true;

 if($validated)

 {

 $_SESSION['login'] = "OK";

 $_SESSION['username'] = $user;

 $_SESSION['password'] = $pass;

 header('Location: protected.php');

 }

 else

 {

 $_SESSION['login'] = "";

 echo "Invalid username or password.";

 }

 }

 else $_SESSION['login'] = "";

 ?>
