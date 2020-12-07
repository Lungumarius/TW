<?php

$link = mysqli_connect("localhost", "root", "", "magazin_online");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$nume = mysqli_real_escape_string($link, $_POST['nume']);
$prenume = mysqli_real_escape_string($link, $_POST['prenume']);
$mail = mysqli_real_escape_string($link, $_POST['mail']);
$parola = mysqli_real_escape_string($link, $_POST['parola']);
$telefon = mysqli_real_escape_string($link, $_POST['telefon']);
$oras = mysqli_real_escape_string($link, $_POST['oras']);
$adresa = mysqli_real_escape_string($link, $_POST['adresa']);

if(empty($nume) || empty($prenume ) || empty($mail) || empty($parola)|| empty($telefon)|| empty($oras)|| empty($adresa))
	die('Toate campurile sunt obligatorii ! ');

$parola=hash('ripemd160',$parola);
$sql = "INSERT INTO users (nume, prenume, mail, parola, telefon, oras, adresa) VALUES ('$nume','$prenume','$mail','$parola','$telefon','$oras','$adresa')";
if(mysqli_query($link, $sql)){
	header("Refresh:0; url=../html/index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
