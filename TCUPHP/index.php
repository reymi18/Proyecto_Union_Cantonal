<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <title>¿Que hacer en Pococi?</title>
          <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="code.js"></script>
	<script src="main.js"></script>
    </head>
    <div class="contenedor"> 
         
    	     
    	<nav class="menu1">
    
    <body   background="Imagenes/logo_ucapococi_1.png">
        
      
              <?php include './Interfaz/header.html'; ?>     
         
    
  
    <div class="social">
        <ul>
            <li><a href="http://www.facebook.com/caribecasetuc/" target="_blank" class="icon icon-facebook"></a></li>
            <li><a href="http://www.twitter.com/" target="_blank" class="icon icon-twitter"></a></li>
            <li><a href="http://www.googleplus.com/" target="_blank" class="icon icon-google-plus"></a></li>
            <li><a href="http://www.pinterest.com/" target="_blank" class="icon icon-pinterest"></a></li>
            <li><a href="mailto:infoccatuspo@gmail.com" class="icon icon-mail"></a></li>
	</ul>
    </div>
  
        <div class="contenedor">
            <img src="Imagenes/logo_ucapococi_1.png"/>
            
            <?php //Ejemplo curso PHP aprenderaprogramar.com
            $time = time();
            echo date("d-m-Y ");
            ?>
        </div>
  
	<div class="main">
		<div class="slides">
                    <img src="http://www.hotelrincondesanjose.com/wp-content/uploads/2015/02/tortuguero-11.jpg" alt="" >
                    <img src="http://static.diario.latercera.com/201201/1444007.jpg" alt="">
                    <img src="https://enepi.files.wordpress.com/2014/12/4-dia-4-tortuguero.jpg" alt="">
                    <img src="http://www.sinac.go.cr/documentos/Estrategia%20Manglares/Manglares%20y%20Paisajes/Sector%20R%C3%ADo%20Rinc%C3%B3n.JPG" alt="">
		</div>
	</div>
  
          <div class="contenedor">           
             </div>

	<script src="code2.js"></script>
        <script src="js/jquery.slides.js"></script>
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
           </nav>
    	</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
