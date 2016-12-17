<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingresar</title>
        <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/style.css">
        <style>
            body {
              background:url('Imagenes/fondo.jpg');  
            }
        </style>
        
    </head>
    <body>
        
        <header>
    	<div class="contenedor">
           
    	<nav class="menu1">
                    <ul>
                        <li><a href="index.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
                    <li><a href=""><span class="segundo"><i class="icon icon-map2"></i></span>Lugares</a>
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
                    <li><a href=""><span class="tercero"><i class="icon icon-database"></i></span>Servicios</a>
    			<ul>
                            <li><a href="">Hospedaje</a></li>
                            <li><a href="">Gastronomico</a></li>
                            <li><a href="">Centros deportivos</a></li>
                            <li><a href="">Piscina</a></li>
    			</ul>
                    </li>
                    <li><a href=""><span class="quinto"><i class="icon icon-text"></i></span>Administrativa</a>
                        <ul>
                            <li><a href="">Insertar Negocios</a></li>
                            <li><a href="">Editar Negocio</a></li>
    			</ul>
                    </li>
                    <li><a href="Acercade.php"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a>
                        <ul>
                            <li><a href="Acercade.php">¿Que hacer en Pococi?</a></li>
                            <li><a href="acercadeccatuspo.html">CCATUSPO</a></li>
    			</ul>
                    </li>
                    <li><a href="login.php"><span class="sexto"><i class="icon icon-address-book"></i></span>Login</a></li>
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
   <!-- Termina el menu de navegacion y barra social -->
   
   
   <form class="login" action="operaciones.php" method="post">
   		 <h1>Iniciar secion</h1>
		 <input type="text" maxlength="20" placeholder="Ingrese su username" name="usuario"/>
		 <input type="password" maxlength="20" placeholder="Ingrese su contraseña" name="clave"/>
		 <button type="submit" name="sb_acceder" value="Acceder">Ingresar</button> 
		 <button type="button">Cancelar</button> 
		 
   </form>
  
        <?php
        // put your code here
        ?>
    </body>
</html>
