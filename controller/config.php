<?php
$server='localhost';
$id='root';
$pwd='';
$dbname='health';
$link = mysqli_connect($server, $id, $pwd, $dbname);
$dbname='health';
mysqli_set_charset($link,'utf8');
mysqli_select_db($link, $dbname);

?>