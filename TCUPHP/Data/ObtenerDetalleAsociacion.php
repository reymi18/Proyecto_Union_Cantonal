
<?php


if (isset($_GET['id']) && !empty($_GET['id']))
{
        $id=$_GET['id'];
        //echo 'idddddddddddd   '.$id;
        
        obtenerDetalle($id);
        
}


function  obtenerDetalle($id_asocia){
   // echo 'Deraleeeeeeeeeeeeeeeee';
    require './Database.php';   
    require '../Dominio/Integrante.php';
    require '../Forms/DetalleAsociacion.php';
    require '../Dominio/Asociacion.php';
    require '../Dominio/Acontecimiento.php';
    
$con=mysql_connect($host,$user,$pw)
or die ("problemas al conectar");

mysql_select_db($db,$con)or
die ("Problemas al conectar la bd");

//echo 'id  Socia     '.$id_asocia;

$resultado=mysql_query("select * from integrante  where id_asociacion=".$id_asocia.";",$con);


$listaIntegrante = array();
$x=0;

while($integrante=mysql_fetch_array($resultado)){
  
    if ($integrante !=NULL) {
    $nuevoIntegrante = new Integrante($integrante['nombre'], $integrante['apellidos'], $integrante['telefonos'],$integrante['correo'],$integrante['cedula'],$integrante['puesto'],$integrante['id_asociacion']);
    $listaIntegrante[$x]=$nuevoIntegrante;
    /* echo 'Nombre '.$listaIntegrante[$x]->getNombre().'<br/>';
     echo 'Puesto '.$listaIntegrante[$x]->getPuesto().'<br/>';
     echo 'cedula '.$listaIntegrante[$x]->getCedula().'<br/>';*/
    $x++;
    } 
   
   
}
$resultado=mysql_query("select * from asociacion  where id_asociacion=".$id_asocia.";",$con);
$x=0;
while($asociacion=mysql_fetch_array($resultado)){
  
    if ($asociacion !=NULL) {
    $nuevaAsociacion = new Asociacion($asociacion['nombre'], $asociacion['direccion'], $asociacion['correo'],$asociacion['telefono'],$asociacion['id_asociacion'],$asociacion['clave'],'null');
   /* echo 'Nombre = '.$nuevaAsociacion->getNombre();
     echo 'ID  ='.$nuevaAsociacion->getId_asociacion();*/
     
    $x++;
    } 

}

$listaAcontecimiento=obtenerAcontecimiento($id_asocia,$con);
mostrarDetalle($listaIntegrante,$nuevaAsociacion,$listaAcontecimiento);
}

//select * 
//from acontecimiento  where id_asociacion= 32;

function  obtenerAcontecimiento($idSocia,$con){
    
    $resultado=mysql_query("select * from acontecimiento  where id_asociacion=".$idSocia.";",$con);


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
   return $listaAcontecimientos;   
}

?>
