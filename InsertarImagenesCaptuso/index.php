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
         <p>
               
    
    <center><strong><h1>Insertar Fotos </h1></strong></center>
    <p>
        
        
        
        
        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            
            <?php       
             $v1=0; 
           $v1 = $_POST['idNegocio'];
           echo " valor?????? $v1";
             ?>
        <input type="hidden" name="idNego" value="<?=$v1;?>"/>
            <center><table border="1">
            
                    <tr bgcolor="skyblue">       
                
                <td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
            </tr>
          
            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>
                    
            Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" bgcolor="skyblue">
                
                <input type="submit" name="enviar" value="Guardar"></td>
            </tr>
            </center></table>
        </form>    
    
        
        <br><br>
        <table border="1">
        <?php
        require_once 'conexion.php';
        $sql=  mysql_query("select * from imagenes");  
       # $res= mysql_data_seek($sql,0);
        # while($res= mysql_fetch_assoc($sql)){
           #  echo $res["nombre"]."<br>";
          
       # }
        
            
        while($res= mysql_fetch_assoc($sql)){
            // echo $res["tipo"]."<br>";
              
       // echo '<img src="'.$res["imagen"].'" width="100" heigth="100"><br>';
        
            }
            echo 'Aqui puede agreguar imagenes a su negocio \n'
            . ' 1. Presione "examinar"  seleccione la imagen del negocio que esta en  su ordenador \n'
            . ' 2. Dele un nombre a la imagen \n'
            . '  3. Presione "Guardar y listo" \n'
                ;
         
        
        ?>
      </table>
</center>
    </body>
</html>
