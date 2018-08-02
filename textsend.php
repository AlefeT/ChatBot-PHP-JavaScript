<?php 

session_start();

date_default_timezone_set('America/Sao_Paulo');

$currentunix = time();

include "functions.php";
include "sendfunctions.php";

$db = mysqli_connect("db.db.db.db.db", "db", "db", "db");
 
$userId	= $_POST["userId"];
$text	= $_POST["text"];
 
$query = mysqli_query($db, "SELECT COUNT(*) FROM db.tabela WHERE senderid = '$userId';");
$row = mysqli_fetch_row($query);
$counter = $row[0];

include "estagio0.php";

if ($counter>0){
	
$query = mysqli_query($db, "SELECT estagio FROM db.tabela WHERE senderid=$userId;");
$row = mysqli_fetch_row($query);
$estagio = $row[0];

include "estagio1.php";

include "estagio2.php";

include "estagio3.php";

}

 echo $message;
 
 mysqli_close($db);
 ?>