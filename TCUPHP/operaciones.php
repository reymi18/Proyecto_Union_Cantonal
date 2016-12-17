<?php
include ("Data/Database.php");

session_start();

//echo "<script>alert('Entro pero...........')</script>";
if($_POST['sb_acceder']=="Acceder"){
   
    $csql = "select count(*) from asociacion where correo= '".$_POST["usuario"]."' and clave= '".$_POST["clave"]."'";
    $con=mysql_connect($host,$user,$pw) or die ("problemas al conectar");
    mysql_select_db($db,$con)or die ("Problemas al conectar la bd");

    $resultado= mysql_query($csql);
    
    
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
$fila = mysql_fetch_row($resultado);


    
     if($fila[0] == 1){
         if($_POST["usuario"]=='ucap@gmail.com'){
         $_SESSION["usuariol"]=$_POST["usuario"];
         header("Location:index.php");
         }else{
             $_SESSION["usuariol"]=$_POST["usuario"];
             header("Location:indexAsocia.php");
             
         }
         
     }  else {
        
        
         
         echo '<script type="text/javascript">
                alert("Usuario o contraseña incorrecta por favor intentalo de nuevo");
                window.location.assign("login.php");
                </script>';

     }
     
}  else {
   // echo "<script>alert('Usuario o contraseña incorrecta por favor intentalo de nuevo ')</script>";
    //header("Location:login.php");
}
   

 
echo 'Hola mundo';