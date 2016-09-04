<?php
include ("../Data/Database.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre'])&&
    isset($_POST['clave']) && !empty($_POST['clave']))
{
        $nom=$_REQUEST["txtnom"];
        $foto=$_FILES["foto"] ["name"];
        $ruta=$_FILES["foto"] ["tmp_name"];
        $destino="../Fotos/".$foto;
        copy($ruta, $destino);
        echo "$foto , $destino ";
        
    
$con=mysql_connect($host,$user,$pw) or die ("problemas al conectar");
mysql_select_db($db,$con)or die ("Problemas al conectar la bd");


mysql_query("call insertar_Asociacion('$_POST[nombre]',
'$_POST[direccion]',
'$_POST[correo]',
'$_POST[telefono]',
'$_POST[clave]',
'$destino');",$con);
echo "Datos insertados correctamente";
header("Location: ../Forms/insertarAsociacion.php");
 }else{
     
     echo "Problemas al insertar datos"; 
     
 }
?>
