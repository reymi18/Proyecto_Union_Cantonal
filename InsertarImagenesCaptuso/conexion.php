<?php


$hostname='localhost'; 
$username='root'; 
$password='1234'; 
$dbname='Info_Negocio_Guapiles'; 
 
$conex_remota = @mysql_connect($hostname,$username, $password); 

if (!($conex_remota)) { 
    $conex_local = @mysql_connect($hostname2,$username2, $password2) OR DIE ('No puedo conectarme a la base de datos local! Intentelo nuevamente.'); 
} else{
   
}
mysql_select_db($dbname); 


#mysql_select_db("Info_Negocio_Guapiles");

?>

