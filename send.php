<?php
include 'PHP/sql_connect.php';
$idOferty = $_POST["id"];
if ($idOferty == null) $idOferty = 8;
$imie = $_POST["inputImie"];
$nazwisko = $_POST["inputNazwisko"];
$email = $_POST["inputEmail"];
$telefon = $_POST["inputTelefon"];
$target_dir = "CVS/";
$target_file = $target_dir.basename($_FILES["inputFile"]["name"]);
//echo $target_file;
//echo $_FILES["inputFile"]["tmp_name"];
$uploadOk = 1;
if (file_exists($target_file)) {
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = tempnam("$target_dir","CV0000000").'.'.$FileType;
}
//if(isset($_GET["submit"])) {
		 if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) 
		 {
        //echo "The file ". basename( $_FILES["inputFile"]["name"]). " has been uploaded.";
		header('Location: oferty.php?success=true');
		} 
		else 	
		{
			header('Location: oferty.php?success=false');
        //echo "Sorry, there was an error uploading your file.";
		}

$zap = "SELECT id FROM swp_uzytkownicy WHERE email like '$email'";
$zap = mysql_query($zap);
$row = mysql_fetch_array($zap);
$id = $row[0];
if ($id == null) $zap = 'INSERT INTO swp_uzytkownicy (`imie`, `nazwisko`, `email`, `telefon`, `cv`) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$email.'", "'.$telefon.'","'.$target_file.'")';
else $zap = "UPDATE  swp_uzytkownicy set cv = '$target_file' where id = $id";
mysql_query($zap);

$zap = "SELECT id FROM swp_uzytkownicy WHERE email like '$email'";
$zap = mysql_query($zap);
$row = mysql_fetch_array($zap);
$userId = $row[0];

$zap = 'INSERT INTO swp_zgloszenia (id_oferty, id_uzytkownika) VALUES ("'.$idOferty.'","'.$userId.'")';
$zap = mysql_query($zap);

?>