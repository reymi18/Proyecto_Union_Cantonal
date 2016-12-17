<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
           <?php
        
        function mostrarNoticias($listaAcontecimiento){
            
            echo '<div class="contenedor">
    
             <nav class="menu1">
    
             <body   background="../Imagenes/logo_ucapococi_1.png">';
        
      
               include '../Interfaz/header.html';  
            
          echo '<div class="fuenteBlanca">
           <br>
               </div>';
           echo '<div align="center">';
            echo ' <div class="catalogo">';
            //echo '<h2>'.$socia->getNombre().'</h2>';
      
           
             mostrarAcontecimientos($listaAcontecimiento);
             
             echo '</div>'
                  . '</nav>
                    </div> ';
             
      }
      //------------------Metodo para mostrar la lista de acontecimientos ------------------------------------------
      function  mostrarAcontecimientos($listaAcontecimiento){
          
          $longitud=count($listaAcontecimiento);
          echo ' <div class="catalogo">';
          for($i=0; $i< $longitud;$i++){

             echo '<div class="caja2">';
             echo '<p></p><h4> ->'.$listaAcontecimiento[$i]->getNombre().'</h4> ->Publicación:'.$listaAcontecimiento[$i]->getFecha().'<br>';
         
             
             echo '<p>'.$listaAcontecimiento[$i]->getDescripcion().'  </p>';
             
            
           //  echo '<input type="button" value="Detalle" onclick="window.location.href="http://localhost:5000/TCUPHP/Data/ObtenerDetalleAsociacion.php?id='.$listaAsociaciones[$i]->getId_asociacion().'"/>';
           echo '<a href="http://localhost:5000/TCUPHP/Forms/mostrarAcontecimiento.php?id='.$listaAcontecimiento[$i]->getIdAcon().'">Detalle</a>';
             echo '</div>';	  
            // echo ' nombre '.$listaAsociaciones[$i]->getNombre();
             } 
          
      }
      echo'</div>';  
      ?>                     
            
            
          
        }
        ?>
    </body>
</html>
