<?php
$link = mysql_connect('localhost', 'root', 'root@sql');
mysql_select_db("ksprawni_sprawni_dane");
if (!$link) {
   // die('Could not connect: ' . mysql_error());
echo 'Nie mogê po³¹czyæ siê z baz¹';
}
//else echo 'Po³¹czy³em z baz¹...';
//echo "dupa";
mysql_set_charset('utf8',$link);
?>