<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
obtenerAcontecimiento();

function  obtenerAcontecimiento(){
    
     require './Database.php';   
     require '../Dominio/Acontecimiento.php';
    require '../Forms/NoticiasAcontecimientos.php';
$con=mysql_connect($host,$user,$pw)
or die ("problemas al conectar");

mysql_select_db($db,$con)or
die ("Problemas al conectar la bd");

//echo 'id  Socia     '.$id_asocia;
    
    $resultado=mysql_query("select * from acontecimiento   ORDER BY STR_TO_DATE( fecha, '%d/%m/%Y' ) desc;",$con);


$listaAcontecimientos = array();
$x=0;

while($acontecimiento=mysql_fetch_array($resultado)){
 
    if ($acontecimiento !=NULL) {
    $nuevoAcontecimiento = new Acontecimiento($acontecimiento['nombre'], $acontecimiento['sitio'], $acontecimiento['fecha'],$acontecimiento['descripcion'],$acontecimiento['id_acontecimiento'],$acontecimiento['id_asociacion']);
    $listaAcontecimientos[$x]=$nuevoAcontecimiento;
    /* echo 'Nombre '.$listaIntegrante[$x]->getNombre().'<br/>';
     echo 'Puesto '.$listaIntegrante[$x]->getPuesto().'<br/>';
     echo 'cedula '.$listaIntegrante[$x]->getCedula().'<br/>';*/
    $x++;
    } 
   
   
}
   mostrarNoticias($listaAcontecimientos);   
}

?>
