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
    </head>
    <body>
       <!-- <php include("../index.php"); ?> -->
        <form action="../Data/insertAsociacion.php" method="post" name="form" enctype="multipart/form-data">
          <center><table border="1"> 
           Nombre: <br/><input type="tex"  name="nombre"/><br/>
           Correo:<br/> <input type="email" name="correo"/><br/>
           Telefono:<br/> <input type="text" name="telefono"/><br/>
           Direccion:<br/><input type="text" name="direccion"/><br/>
           Clave:<br/><input type="text" name="clave"/><br/>
           FotoPerfil:
           
            
            
        <input type="hidden" name="idNego" value="<?=$v1;?>"/>
            
            
                    <tr bgcolor="skyblue">       
                
               
            </tr>
          
            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>
                    
            Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" bgcolor="skyblue">
              
                
                  <input type="submit" value="Insertar Asociacion"/>
            </tr>
            </center></table>
        
           
         
           
        </form>
       <br><br>
        <table border="1">
        <?php
       include ('../Data/Database.php');
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
         
        
        ?>
      </table>
         
        
    </body>
</html>
