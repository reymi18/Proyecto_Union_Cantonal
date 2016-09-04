<?php 

include ("../Data/Database.php");
include ("../Dominio/Asociacion.php");
$con=mysql_connect($host,$user,$pw)
or die ("problemas al conectar");

mysql_select_db($db,$con)or
die ("Problemas al conectar la bd");

$resultado=mysql_query("call obtener_Asociacion ()",$con);


$listaAsociaciones = array();
$x=0;

while($asociacion=mysql_fetch_array($resultado)){
  
    if ($asociacion !=NULL) {
    $nuevaAsociacion = new Asociacion($asociacion['nombre'], $asociacion['direccion'], $asociacion['correo'], $asociacion['telefono'], $asociacion['id_asociacion'], $asociacion['clave'],$asociacion['foto_perfil']);
    
    $listaAsociaciones[$x]=$nuevaAsociacion;
    echo "Asociacion : ".$listaAsociaciones[$x]->getNombre()."<br />";
    echo "Direccion : ".$listaAsociaciones[$x]->getDireccion()."<br />";
     echo "Corrreo : ".$listaAsociaciones[$x]->getCorreo()."<br />";
      echo "Clave : ".$listaAsociaciones[$x]->getClave()."<br />";
       echo "Telefono : ".$listaAsociaciones[$x]->getTelefono()."<br />";
       echo "Id : ".$listaAsociaciones[$x]->getId_asociacion()."<br />";
       echo "Foto : ".$listaAsociaciones[$x]->getFoto_perfil()."<br />";
    $x++;
    } 
   
   
}



?>


