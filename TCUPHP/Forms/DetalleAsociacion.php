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
        
        function mostrarDetalle($listaIntegrantes,$socia,$listaAcontecimiento){
            
            echo '<div class="contenedor">
    
             <nav class="menu1">
    
             <body   background="../Imagenes/logo_ucapococi_1.png">';
        
      
               include '../Interfaz/header.html';  
            
          echo '<div class="fuenteBlanca">
            <center><h2>'.strtoupper($socia->getNombre()).'</h2></center> <br>
               </div>';
           echo '<div align="center">';
            echo ' <div class="catalogo">';
            //echo '<h2>'.$socia->getNombre().'</h2>';
             echo '<h2>'.strtoupper($socia->getDireccion()).'</h2>';
              echo '<h2>'.strtoupper($socia->getCorreo()).'</h2>';
              echo '<h2>'.strtoupper($socia->gettelefono()).'</h2>';
              
              
            $longitud=count($listaIntegrantes);
            echo '<h1>Integrantes</h1>';
              echo'<table border="2px">'; 
                echo' <tr>
                <th>Puesto</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                 <th>Teléfono</th>
                  <th>Cédula</th>
                   
            
                   
            </tr>';
          for($i=0; $i< $longitud;$i++){

            echo '
            <tr>
                <td>'.strtoupper($listaIntegrantes[$i]->getPuesto()).'</td>
                <td>'.strtoupper($listaIntegrantes[$i]->getNombre()).'</td>             
                <td>'.strtoupper($listaIntegrantes[$i]->getApellidos()).'</td>
                 <td>'.strtoupper($listaIntegrantes[$i]->getCorreo()).'</td>
                 <td>'.strtoupper($listaIntegrantes[$i]->getTelefonos()).'</td>
                 <td>'.strtoupper($listaIntegrantes[$i]->getCedula()).'</td>
            </tr>'
        ;
            	  
            // echo ' nombre '.$listaAsociaciones[$i]->getNombre();
             }
             echo '</table>';
//------------------------------- Fin tabla Integrantes---------------------------------------------------------------------------
    
           
             mostrarAcontecimientos($listaAcontecimiento);
             
             echo '</div>'
                  . '</nav>
                    </div> ';
             
      }
      //------------------Metodo para mostrar la lista de acontecimientos ------------------------------------------
      function  mostrarAcontecimientos($listaAcontecimiento){
          
          $longitud=count($listaAcontecimiento);
          echo ' <div class="catalogo5">';
          for($i=0; $i< $longitud;$i++){

             echo '<div class="caja">';
             echo '<p></p><h4> '.strtoupper($listaAcontecimiento[$i]->getNombre()).'</h4> <br>';
            
             echo '<p>'.strtoupper($listaAcontecimiento[$i]->getDescripcion()).'  </p>';
             
           //  echo '<input type="button" value="Detalle" onclick="window.location.href="http://localhost:5000/TCUPHP/Data/ObtenerDetalleAsociacion.php?id='.$listaAsociaciones[$i]->getId_asociacion().'"/>';
           echo '<a href="http://localhost:5000/TCUPHP/Data/ObtenerDetalleAsociacion.php?id='.$listaAcontecimiento[$i]->getIdAcon().'">Detalle</a>';
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
