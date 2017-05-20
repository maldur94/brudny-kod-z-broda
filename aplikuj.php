<?php
//header('Content-Type: text/html; charset=utf-8');
$id = $_GET['id'];
echo '<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>...</title>
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css">
        
        <script src="js/jquery.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
        
        

        
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript"
  src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        

        
    </head>
    <body>
        <div class="FR">
            <header class="rejestracja">
                <h1>Aplikacja</h1>
            </header>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST" action="send.php?id='.$id.'" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">        
                            <label for="inputImie" class="control-label">Imię</label>
                            <input type="imie" class="form-control" id="inputImie" name="inputImie" placeholder="Imię" aria-required="true" aria-describedby="imie_info" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Podaj imię." required>
                            <p hidden="" id="imie_info">Podaj Imie</p>
                       
                              
                            <label for="inputNazwisko" class="control-label">Nazwisko</label>
                            <input type="nazwisko" class="form-control" id="inputNazwisko" name="inputNazwisko" placeholder="Nazwisko" aria-required="true" aria-describedby="nazwisko_info" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Podaj nazwisko." required>
                            <p hidden="" id="nazwisko_info">Podaj nazwisko</p>
                               
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" aria-required="true" aria-describedby="email_info" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Prawidłowy adres email przykład przykładowy@onet.pl." required>
                            <p hidden="" id="email_info">Prawidłowy adres email przykład przykładowy@onet.pl</p>
                           
                            <label for="inputTelefon" class="control-label">Telefon</label>
                            <input type="telefon" class="form-control" id="inputTelefon" name="inputTelefon" placeholder="Telefon" aria-required="true" aria-describedby="telefon_info" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Numer telefonu nie może zawierać spacji i myślników." >
                            <p hidden="" id="telefon_info">Numer telefonu nie może zawierać spacji i myślników</p>
                        </div>
                        <div class="form-group">
                        <label for="inputFile">Plik CV</label>
                        <input type="file" id="InputFile" name="inputFile" aria-required="true" aria-describedby="cv_info" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Wybierz plik CV." required>
                            <p hidden="" id="cv_info">Wybierz plik z CV</p>
                        </div>
                        <div class="checkbox">
                        <label>
                            <input type="checkbox" aria-required="true" aria-describedby="zgoda_info"> Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. 2016 r. poz. 922)
                            
                        </label>
                            <p hidden="" id="zgoda_info">Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z Ustawą z dnia 29.08.1997 roku o Ochronie Danych Osobowych; tekst jednolity: Dz. U. 2016 r. poz. 922)</p>
                        </div>
                        
                        <div class="bt">
                            <input type="submit" name ="submit" class="btn btn-primary" value="Wyślij">
                        </div>
                        
              
                      </form>
                   
                </div>
                </div>
                
  




                
    </body>
        
<script type="text/javascript">

$(window).load(function(){
    $("#inputImie").popover();
                           
});
    
    $(window).load(function(){
    $("#inputNazwisko").popover();
                           
});
    $(window).load(function(){
    $("#inputEmail").popover();
                           
});
    $(window).load(function(){
    $("#inputTelefon").popover();
                           
});
      $(window).load(function(){
    $("#exampleInputFile").popover();
                           
});
</script>

</html>';

?>