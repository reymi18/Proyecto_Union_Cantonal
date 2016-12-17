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
    <body background="Imagenes/LOGO_UNCAP.png">
        
        <header>
    	<div class="contenedor"> 
            
           
    	<nav class="menu1">
                    <ul>
                        <li><a href="indexLogueado.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
                    <li><a href="./negocioaction.do?method=obtenerNegociosImagenesMostrar&distrito=Guapiles"><span class="segundo"><i class="icon icon-map2"></i></span>Asociaciones</a>
                           <ul>
                                <li><a href="">Guapiles</a></li>
    				<li><a href="">Cariari</a></li>
    				<li><a href="">Colorado</a></li>
    				<li><a href="">Jimenez</a></li>
				<li><a href="">La Rita</a></li>
				<li><a href="">Roxana</a></li>
				<li><a href="">La Colonia</a></li>
    			</ul>
                    </li>
                    <li><a href="Data/llamado.php"><span class="tercero"><i class="icon icon-database"></i></span>#Servicios</a>
    			<ul>
                            <li><a href="">Hospedaje</a></li>
                            <li><a href="">Gastronomico</a></li>
                            <li><a href="">Centros deportivos</a></li>
                            <li><a href="">Piscina</a></li>
    			</ul>
                    </li>
                    <li><a href=""><span class="quinto"><i class="icon icon-text"></i></span>Administrativa</a>
                        <ul>
                            <li><a href="Forms/insertarAsociacion.php">#Insertar Asociacion</a></li>
                            <li><a href="Data/obtenerAsociaciones.php">#Editar Asociciación</a></li>
    			</ul>
                    </li>
                    <li><a href="Acercade.php"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a>
                        <ul>
                            <li><a href="Acercade.php">¿Que hacer en Pococi?</a></li>
                            <li><a href="">CCATUSPO</a></li>
    			</ul>
                    </li>
                    <li><a href="login.php"><span class="sexto"><i class="icon icon-address-book"></i></span><?php
            session_start();
            
            echo 'Bienvenido: '.$_SESSION["usuariol"];
            ?></a></li>
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
        // put your code here
        ?>
    </body>
</html>


