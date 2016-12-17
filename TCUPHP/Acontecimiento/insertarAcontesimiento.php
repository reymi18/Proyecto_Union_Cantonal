<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo evento</title>
    <link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="jsAcontesimiento.js"></script> 
        
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/notify.min.js" type="text/javascript"></script>
        <script src="../js/notify.js" type="text/javascript"></script>
    </head>
    <div class="contenedor">
            
         <nav class="menu1">
              
     <body   background="../Imagenes/logo_ucapococi_1.png">
       
     <?php include '../Interfaz/header.html'; ?>
        <?php
       
          ?>
    <center>
        <h1> Nuevo Evento  </h1>
                            <form> 
                          <div>
                            <label for="nombre">Fecha </label><br/>
                            <input type="date" id="fecha" name="date" class="tcal" value="<?php echo date("d")."/".date("m")."/".date("Y")?>" placeholder="Utilice el calendario" required /><br/><br/>
                          </div>
                        
                           <div>
                            <label > Nombre del evento </label><br/>
                            <input type="text"  name="evento" id="nomEvento" required /><br/><br/>
                          </div>
                           <div>
                            <label > Descripción del evento </label><br/>
                            
                          <textarea rows="9" cols="40" id="descripEvento" required ></textarea><br/><br/>
                           </div>
                <div>
                            <label > Lugar del evento </label><br/>
                            <input type="text"  name="sitioEvento" id="sitioEvento" required /><br/><br/>
                          </div>
              <input type="button"  value="Insertar Acontecimiento" id="insertar" onclick="registrarAcontecimiento();"  /><br/><br/>
           
            <input type="hidden"  value="" id="codigo" required /><br/><br/>
                        </form>   
        
        <div id="acontecimiento"></div>
        </center
        
        </nav>
             </div> 
    </body>
</html>
