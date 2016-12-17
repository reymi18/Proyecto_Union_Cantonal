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
    </head>
    <body>
        
       
        <?php
       
    
     require '../Data/Database.php';   
     require '../Dominio/Foto.php';
    require '../Forms/NoticiasAcontecimientos.php';
    
    
    $idAcon=$_GET['id'];
$con=mysql_connect($host,$user,$pw)
or die ("problemas al conectar");

mysql_select_db($db,$con)or
die ("Problemas al conectar la bd");

//echo 'id  Socia     '.$id_asocia;
    
    $resultado=mysql_query("select * from foto  where  id_acontecimiento=".$idAcon.";",$con);


$listaFotos = array();
$x=0;
?>
        
        <div class="main">
		
                   <div class="slides">
	        
        <?php

while($foto=mysql_fetch_array($resultado)){
 
    if ($foto !=NULL) {
    $nuevaFoto = new Foto($foto['nombre'], $foto['direccion'], $foto['id_foto'],$foto['id_acontecimiento']);
    $listaFotos[$x]=$nuevaFoto;
    ?>
        
        <img src="<?php echo ''.$listaFotos[$x]->getDireccion()?>" alt="" >
        
        <?php
    
    //echo 'Nombre '.$listaFotos[$x]->getNombre().'<br/>';
    // echo 'Puesto '.$listaFotos[$x]->getDireccion().'<br/>';
   //  echo 'cedula '.$listaFotos[$x]->getId_acontecimiento().'<br/>';*/
    $x++;
    } 
   
   
}
 ?>
        
        </div>
	</div>
        <?php

        ?>
        
        
         
  
          <div class="contenedor">           
             </div>

	<script src="../code2.js"></script>
        <script src="../js/jquery.slides.js"></script>
	<script>
            $(function(){
            $(".slides").slidesjs({
              play: {
                active: true,
                  // [boolean] Generate the play and stop buttons.
                  // You cannot use your own buttons. Sorry.
                effect: "slide",
                  // [string] Can be either "slide" or "fade".
                interval: 5000,
                  // [number] Time spent on each slide in milliseconds.
                auto: true,
                  // [boolean] Start playing the slideshow on load.
                swap: true,
                  // [boolean] show/hide stop and play buttons
                pauseOnHover: false,
                  // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                  // [number] restart delay on inactive slideshow
              }
            });
          });
	</script>
        
        
        
    </body>
</html>
