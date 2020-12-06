<?php

$link = mysqli_connect("localhost", "root", "", "magazin_online");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$nume = mysqli_real_escape_string($link, $_POST['first_name']);
$prenume = mysqli_real_escape_string($link, $_POST['last_name']);
$mail = mysqli_real_escape_string($link, $_POST['email']);
$parola = mysqli_real_escape_string($link, $_POST['email']);
$telefon = mysqli_real_escape_string($link, $_POST['email']);
$oras = mysqli_real_escape_string($link, $_POST['email']);
$adresa = mysqli_real_escape_string($link, $_POST['email']);

if(empty($nume) || empty($prenume ) || empty($mail) || empty($parola)|| empty($telefon)|| empty($oras)|| empty($adresa){
	echo 'Toate campurile sunt obligatorii ! ';
	die();
}
$parola=hash('ripemd160',$parola);
$sql = "INSERT INTO users (first_name, last_name, email) VALUES ('$nume','$prenume','$mail','$parola','$telefon','$oras','$adresa')";
if(mysqli_query($link, $sql)){
	header("Refresh:0; url=../html/index.php");
    echo "<alert> Inregistrare cu succes </alert>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
