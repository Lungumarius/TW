<?php

$link = mysqli_connect("localhost", "root", "", "magazin_online");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();

 $mail2 = mysqli_real_escape_string($link,$_POST['mail2']);
 $parola2 = mysqli_real_escape_string($link,$_POST['parola2']);
 $parola2=hash('ripemd160',$parola2);


        $query = "SELECT * FROM `users` WHERE mail='$mail2'
and parola='$parola2'";
 $result = mysqli_query($link,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['mail'] = $mail2;
	 header("Refresh:0; url=../html/index.php");

         }else{
 echo "Parola incorecta";
}
?>
