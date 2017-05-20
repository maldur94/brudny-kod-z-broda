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
        <div class="all">
            <header class="naglowek">
                <h1>'.strtoupper($row['stanowisko']).'</h1>
            </header>
            <div class="opis">
                <table>';
                    if ($pracodawca != null && $pracodawca != "") 
					{
					echo '<tr>
                     <td>Pracodawca: '.$pracodawca['0'].'</td>
                    </tr>';
					}
                    echo '<tr>
                        <td>Data dodania: '.$row['data_dodania'].'</td>
                    </tr>
                    
                    <tr>
                        <td>Działy: '.$row['dzial'].'</td>
                    </tr>
                    <tr>
                        <td>Miasto: '.$row['miasto'].'</td>
                    </tr>
                    <tr>
                        <td>Województwo: '.$row['wojewodztwo'].'</td>
                    </tr>
                    <tr>
                        <td>Obowiązki: '.$row['obowiazki'].'</td>
                    </tr>
                    <tr>
                        <td>Wykształcenia: '.$row['wyksztalcenia'].'</td>
                    </tr>
                </table>
            </div>
        </div>       
    </body>
   
</html>';
?>