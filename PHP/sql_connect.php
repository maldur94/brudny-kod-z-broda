<?php
$link = mysql_connect('localhost', 'root', 'root@sql');
mysql_select_db("ksprawni_sprawni_dane");
if (!$link) {
   // die('Could not connect: ' . mysql_error());
echo 'Nie mog� po��czy� si� z baz�';
}
//else echo 'Po��czy�em z baz�...';
//echo "dupa";
mysql_set_charset('utf8',$link);
?>