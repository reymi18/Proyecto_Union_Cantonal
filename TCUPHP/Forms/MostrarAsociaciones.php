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
        
        <script src="../code.js"></script>
        <script src="../main.js"></script>
         <style>
             body{
                background: url('../Imagenes/fondo2.jpg') #e2e2e2;
            }
            .negocio {
                width:300px;
                height:240px;
            }
            .fuenteBlanca{
                background: #000;
                color: #fff;;
                border-radius: 10px;
            }
        </style> 
    </head>
    
              
     <body >

            
        
        
        
           
      <?php 
     // require ('../Dominio/Asociacion.php');
    
      function mostrarImagenes($listaAsociaciones){
          
          
          //include '../F';C:\xampp\htdocs\TCUPHP\Fotos
          echo '<div class="contenedor">
            
                 <nav class="menu1">
                 
              ';
          
            include '../Interfaz/header.html';
          echo'<img src="../Imagenes/logo_ucapococi_1.png"/>';
            //Ejemplo curso PHP aprenderaprogramar.com
            $time = time();
            echo date("d-m-Y ");
            
            $longitud=count($listaAsociaciones);
         
          echo ' <div class="catalogo4">';
          for($i=0; $i< $longitud;$i++){
             
             
   
             echo '<div class="caja">';
             echo '<p></p><h4> '.$listaAsociaciones[$i]->getNombre() .'</h4> <br>'; 
             echo '<p> <img class="negocio" src="http://localhost:5000/TCUPHP/'.$listaAsociaciones[$i]->getFoto_perfil().'" alt="Imagen tal"  ></p>';
             
           //  echo '<input type="button" value="Detalle" onclick="window.location.href="http://localhost:5000/TCUPHP/Data/ObtenerDetalleAsociacion.php?id='.$listaAsociaciones[$i]->getId_asociacion().'"/>';
           echo '<a href="http://localhost:5000/TCUPHP/Data/ObtenerDetalleAsociacion.php?id='.$listaAsociaciones[$i]->getId_asociacion().'">'.strtoupper($listaAsociaciones[$i]->getNombre()).'</a>';
             echo '</div>';
             
             
            // echo ' nombre '.$listaAsociaciones[$i]->getNombre();
             }
              echo '</nav>
             </div> ';
      }
     ?>                     
    
        
        <?php
       
        
        
        ?>



    
    </body>
</html>
