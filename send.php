<?php
include 'sql_connect.php';
$imie = $_POST["inputImie"];
$nazwisko = $_POST["inputNazwisko"];
$email = $_POST["inputEmail"];
$telefon = $_POST["inputTelefon"];
$target_dir = "../CVS/";
//var_dump($firstName);
//var_dump($surName);
//var_dump($email);
//var_dump($telefon);
$target_file = $target_dir.basename($_FILES["inputFile"]["name"]);
$uploadOk = 1;
echo $_FILES["inputFile"];
echo $_FILES["inputFile"]['name'];
echo $target_file;
//if (file_exists($target_file)) {
//$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
//$target_file = tempnam("$target_dir","CV0000000".$FileType);
//if(isset($_GET["submit"])) {
        $uploadOk = 1;
		
		 if (move_uploaded_file($_FILES["inputFile"]["name"], $target_file)) 
		 {
        echo "The file ". basename( $_FILES["inputFile"]["name"]). " has been uploaded.";
		} 
		else 	
		{
        echo "Sorry, there was an error uploading your file.";
		}


$zap = 'INSERT INTO IGNORE swp_uzytkownicy (imie, nazwisko, email, telefon) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$email.'", "'.$telefon.'")';
echo ($zap);
$zap = mysql_query($zap);

//$zap = 'SELECT id, stanowisko, miasto FROM swp_oferty_pracy';
//$produkty = mysql_query($produkty);

?>