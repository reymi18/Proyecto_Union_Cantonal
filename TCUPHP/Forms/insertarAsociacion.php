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
       <!-- <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/style.css">
       
        
        
        <script src="../code.js"></script> 
        <script src="../main.js"></script>-->
       
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
       <!-- <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/notify.min.js" type="text/javascript"></script>
        <script src="../js/notify.js" type="text/javascript"></script>-->
        <script src="../js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.js" type="text/javascript"></script>
        
        
    </head>
    <div class="contenedor">
            
         <nav class="menu1">
              
     <body   background="../Imagenes/logo_ucapococi_1.png">
       
     <?php include '../Interfaz/header.html'; ?>
             
             <div class="contenedor">
            <img src="../Imagenes/logo_ucapococi_1.png"/>
            
            <?php //Ejemplo curso PHP aprenderaprogramar.com
            $time = time();
            echo date("d-m-Y ");
            ?>
        </div>
        <form action="../Data/insertAsociacion.php" method="post" name="form" enctype="multipart/form-data">
            <center>
                Nombre: <br/><input type="tex" id="nombre" name="nombre"/><br/>
                Correo:<br/> <input type="email" id="email" name="correo"/><br/>
                Telefono:<br/><input type = "text" name="telefono" size = "30" id="tel" placeholder="Ejemplo: 87654321" ><br/>
                Direccion:<br/><input type="text"  id="direccion" name="direccion"/><br/>
                Clave:<br/><input type="text" id="clave" name="clave"/><br/>
                FotoPerfil:


                <input type="hidden" name="idNego" value="<?= $v1; ?>"/>    
                <table border="1"> 
                    <tr bgcolor="skyblue">       


                    </tr> 
                    <tr bgcolor="skyblue">
                       <!-- <td colspan="2" align="center" bgcolor="skyblue">
                           <strong>
                                Foto:
                            </strong>
                        </td>-->
                        <td colspan="2" align="center" bgcolor="skyblue">
                            <input type="file" name="foto" id="foto">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" bgcolor="skyblue">
                            <input type="submit" value="Insertar Asociacion"/>
                        </td>
                    </tr>
                </table>
                
            </center>
        </form>
        <br><br>
</nav>
             </div> 

        
        <?php
               
if (isset($_GET['request'])) {


    if ($_GET['request'] == 'success') {
    
        ?> 
                                <script type="text/javascript">// < ![CDATA[ 
                                    $.notify("Asociación insertada correctamente ", "success");
        // ]]>
                                </script>
                                
                               
        <?php
    }
    
    if ($_GET['request'] == 'error') {
        ?> 
                                <script type="text/javascript">// < ![CDATA[ 
                                    $.notify("Error al insertar asociacion ", "error");
        // ]]>
                                </script>
       
<?php }

    }?>

        
        
<!-- <table border="1">
       /* include ('../Data/Database.php');
          $con=mysql_connect($host,$user,$pw) or die ("problemas al conectar");
          mysql_select_db($db,$con)or die ("Problemas al conectar la bd");
          $sql=  mysql_query("select * from asociacion");
          // $res= mysql_data_seek($sql,0);
          // while($res= mysql_fetch_assoc($sql)){
          //      echo $res["foto_perfil"]."<br>";

          // }


          while($res= mysql_fetch_assoc($sql)){
          echo $res["nombre"]."<br>";

          echo '<img src="'.$res["foto_perfil"].'" width="100" heigth="100"><br>';

          }
          echo 'Aqui puede agreguar imagenes a su negocio \n'
          . ' 1. Presione "examinar"  seleccione la imagen del negocio que esta en  su ordenador \n'
          . ' 2. Dele un nombre a la imagen \n'
          . '  3. Presione "Guardar y listo" \n'
          ;


         */ 
</table>-->


    </body>
</html>
