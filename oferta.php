<?php
include 'PHP/sql_connect.php';
$id = $_GET['id'];
$zap = 'SELECT * FROM swp_oferty_pracy WHERE id = '.$id;
$zap = mysql_query($zap);
$row = mysql_fetch_array($zap);
$pracodawca = mysql_fetch_array(mysql_query('SELECT nazwa FROM swp_pracodawcy WHERE id ='.$row['pracodawca_id']));



echo '<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>...</title>
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <header class="og">
                <h1>'.strtoupper($row['stanowisko']).'</h1>
                <hr>
            </header>
            <div class="row opis mar ">
               ';
                    if ($pracodawca != null && $pracodawca != "") 
					{
					echo 
                        '<div class="col-md-2 col-md-offset-4 ">Pracodawca: </div> <div class=" col-md-2" >'.$pracodawca['0'].'</div> ';
                        
					}
                    echo '
                    
                    
                    
                    
                    <div class="col-md-2 col-md-offset-4">Data dodania:</div> <div class=" col-md-4" >'.$row['data_dodania'].'</div>
                    <div class="col-md-2 col-md-offset-4 " >Działy:</div> <div class=" col-md-4" > '.$row['dzial'].'</div>
                    <div class="col-md-2 col-md-offset-4 ">Miasto: </div> <div class=" col-md-4" >'.$row['miasto'].'</div>
                    
                    <div class="col-md-2 col-md-offset-4 ">Województwo: </div> <div class=" col-md-4" >'.$row['wojewodztwo'].'</div>
                    <div class="col-md-2 col-md-offset-4 ">Obowiązki: </div> <div class=" col-md-4" >'.$row['obowiazki'].'</div>
                    <div class="col-md-2 col-md-offset-4 ">Wykształcenia: </div> <div class=" col-md-4" >'.$row['wyksztalcenia'].'</div>
               
              
                
            </div>
            <br>
           <hr>
             <div class="sr"><a href="aplikuj.php?id='.$id.'"><button type="button" class="btn btn-success btn-lg">Aplikuj</button></a></div>
             <br>
        </div>     
    </body>
   
</html>';  
?>