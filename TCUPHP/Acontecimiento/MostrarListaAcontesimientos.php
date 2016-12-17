<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Acontecimientos</title>
         <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="jsAcontesimiento.js"></script> 
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" /> 
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    </head>
     <div class="contenedor">
            
         <nav class="menu1">
              
     <body   background="../Imagenes/logo_ucapococi_1.png">
       
     <?php include '../Interfaz/header.html'; ?>
        <?php
         include ("../Data/Database.php");
          require '../Dominio/Acontecimiento.php';
          
          
          
          
           $idSocia=1;
          $con= new  mysqli($host,$user,$pw,$db) ;
            if($con->connect_error){
                die("conexion fallida".$con->error);
            }else{
          
             // $resultado="select * from acontecimiento  where id_asociacion=".$idSocia.";";
                $resultado="select * from acontecimiento  where id_asociacion=32;";
              $result= $con->query($resultado); 

$listaAcontecimientos = array();
$x=0;   

  
 
  ?>
    <center>
        
    </center>
        
        
    <center>
           <table class="tabla" border="3px" cellpadding="20px">

                     <tr>
                            <th>Fecha del Evento</th>
                            <th>Sitio</th>
                            <th>Descripción</th> 
                            <th>Nombre del evento</th>
                            <th>Agregar Fotos</th>
                     </tr>
        
        <?php
while($acontecimiento=mysqli_fetch_array($result)){
 
    if ($acontecimiento !=NULL) {
    $nuevoAcontecimiento = new Acontecimiento($acontecimiento['nombre'], $acontecimiento['sitio'], $acontecimiento['fecha'],$acontecimiento['descripcion'],$acontecimiento['id_acontecimiento'],$acontecimiento['id_asociacion']);
    $listaAcontecimientos[$x]=$nuevoAcontecimiento;
    
    ?>
                   <tr>     
                       <td> <?php echo $listaAcontecimientos[$x]->getFecha();?></td>
                       <td> <?php echo $listaAcontecimientos[$x]->getSitio();?></td>
                       <td> <?php echo $listaAcontecimientos[$x]->getDescripcion();?></td>
                       <td> <?php echo $listaAcontecimientos[$x]->getNombre();?></td>
                   
                      <!-- <td> <input type="button"  value="Agregar Fotos" id="<?php echo $listaAcontecimientos[$x]->getIdAcon()?>"onclick="abrirModalFoto(this.id);"  > </td>-->
                       <td>  <a href="http://localhost:5000/TCUPHP/Acontecimiento/insertarFoto.php"> Insertar</a> </td>
                     </tr>  
    </center> 
                     
                     
                     <?php
    
    
    
    $x++;
    } 
   
}
}
        ?>
</table> 
        
         <div style="display:none;" id="FotoAcontecimiento" title="Agregar Foto" enctype="multipart/form-data">
                
             <form method="Post" action="Acontecimientos.php" name="form">
                 <input type="hidden" name="metodo" value="guardarFoto">
                 <table border="1"> 
                    
                    <tr bgcolor="skyblue">       


                    </tr> 
                    <tr bgcolor="skyblue">
                       
                        <td colspan="2" align="center" bgcolor="skyblue">
                            <input type="file" name="foto" id="foto">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" bgcolor="skyblue">
                
                            <input type="submit" value="Insertar " />
                        </td>
                    </tr>
                   
                    <input type="text" id="idAcontecimiento" value="6" />
                </table>
                
         </form>
              
             
             <div id="fotoAcon"></div>  
                      </div> 
        
        </nav>
             </div> 
    </body>
</html>
