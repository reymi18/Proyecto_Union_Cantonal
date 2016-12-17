<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <title>UCAP</title>
          <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="code.js"></script>
	<script src="main.js"></script>
    </head>
    <body background="Imagenes/LOGO_UNCAP.png">
        
        <header>
    	<div class="contenedor"> 
            
           
    	<nav class="menu1">
                    <ul>
                        <li><a href="indexAsocia.php.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
                    <li><a href=""><span class="segundo"><i class="icon icon-map2"></i></span>Editar Perfil</a>
                           <ul>
                               
    			</ul>
                    </li>
                    <li><a href=""><span class="tercero"><i class="icon icon-database"></i></span>Acontencimientos</a>
    			<ul>
                          
    			</ul>
                    </li>
                    <li><a href=""><span class="quinto"><i class="icon icon-text"></i></span>Integrantes</a>
                        <ul>
                            
    			</ul>
                    </li>
                    <li><a href="Acercade.php"><span class="cuarto"><i class="icon icon-text"></i></span>Calendario</a>
                        <ul>
                           
    			</ul>
                    </li>
                    <li><a href=""><span class="sexto"><i class="icon icon-address-book"></i></span><?php
            session_start();
            
            echo 'Bienvenido: '.$_SESSION["usuariol"];
            ?></a>
                     <ul>
                         <a href="index.php">Salir</a>  
    			</ul>
                    </li>
    		</ul>
            </nav>
    	</div>
    </header>
  
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
            <img src="Imagenes/LOGO_UCAP.png"/>
            
            
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
        <?php
       
        ?>
    </body>
</html>


