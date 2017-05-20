<?php
$firstName = $_GET["inputImie"];
$surName = $_GET["inputNazwisko"];
$email = $_GET["inputEmail"];
$telefon = $_GET["inputTelefon"];
$target_dir = "../CVS/";
//var_dump($firstName);
//var_dump($surName);
//var_dump($email);
//var_dump($telefon);
$target_file = $target_dir . basename($_FILES["inputFile"]["name"]);
echo $target_file;
if (file_exists($target_file)) {
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_file = tempnam("$target_dir","CV0000000".$FileType);
//if(isset($_GET["submit"])) {
        $uploadOk = 1;
		
		 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		 {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} 
		else 	
		{
        echo "Sorry, there was an error uploading your file.";
		}
}

?>