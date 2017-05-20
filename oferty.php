<?php
include 'PHP/sql_connect.php';
$produkty = 'SELECT id, stanowisko, miasto FROM swp_oferty_pracy';
$produkty = mysql_query($produkty);
echo '<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>...</title>
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <script src="js/jquery.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        

    </head>
    <body class="bbb">
        <div class="all">
            <header class="naglowek">';
			if ($_GET['success']!= null)
			{
			if ($_GET['success']== true)echo '<div>Pomyślnie wysłano zgłoszenie :)</div>';
			else if ($_GET['success']== false) echo '<div>Wystąpił błąd podczas wysyłania zgłoszenia :(</div>';
			}
                echo '<h1 class="og">Wyszukane ogłoszenia</h1>
            </header>
    <div class="lista">
     <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                
                <li class="list-group-item linkli2 ">
                <div class="col-md-8">OFERTA</div> 
                <div class="col-md-4">MIASTO</div></li>
                <br>
                    </div> 
                    </div>
    ';

               
        while ($row = mysql_fetch_array($produkty))
        {
	       echo '
                <div class="row">
                <div class="col-md-8 col-md-offset-2">
               
                <ul class="list-group">
                <a class="link" href="oferta.php?id='.$row[0].'"><li class="list-group-item linkli">
                <div class="col-md-8">'. strtoupper($row[1]).'</div> 
                <div class="col-md-4">'.strtoupper($row[2]).'</div></li></a>
                
                </ul>
                
                </div>
                
               
                    
                </div>';
        }
            echo 
        '</div>
    </div>       
    </body>
</html>';
?>