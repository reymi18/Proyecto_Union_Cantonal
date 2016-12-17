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
     
        
        
        
        
         if (isset($_REQUEST['metodo'])){
                  
                  $metodo=$_REQUEST['metodo'];
                 echo'Meto '.$metodo;
                  
                  if($metodo=="registrarEvento"){
                    
                      registrarEvento(); 
               
                  }
                   if($metodo=="guardarFoto"){
                    
                  $id= $_REQUEST['idAcontecimiento'];
                  
      echo $id ;
        $ruta=$_FILES['foto'] ['tmp_name'];
       
        echo $ruta ;
      
                   
                      //guardarFoto($id,$foto,$destino_2); 
               
                  }
         } 
       
       
         function guardarFoto($id,$ruta,$fil){
              include ("../Data/Database.php");
             
             $idfoto=0;
             $destino="Fotos/".$ruta ;
             $destino2="Fotos/";
              $con= new  mysqli($host,$user,$pw,$db) ;
            if($con->connect_error){
                die("conexion fallida".$con->error);
            }else{
                echo 'Dentra';
                $select=" insert into foto values('".$ruta."','".$destino2."','".$idfoto."','".$id."');";
             
             echo $select;
              $con->query($select); 
              
              copy($fil,$destino);
             
         }
         
         }
         
         function registrarEvento(){
             include ("../Data/Database.php");
                
             $nombre=$_REQUEST['nombreEvento'];
             $fecha=$_REQUEST['fecha'];
             $descripcion=$_REQUEST['descripEvento'];
             $sitio=$_REQUEST['sitioEvento'];
             $id_acontecimiento=0;
             $id_asociacion=1;
                     
            $con= new  mysqli($host,$user,$pw,$db) ;
            if($con->connect_error){
                die("conexion fallida".$con->error);
            }else{
                echo 'Dentra';
                $select=" insert into acontecimiento values('".$nombre."','".$fecha."','".$descripcion."','".$sitio."',".$id_acontecimiento.",".$id_asociacion.");";
             
             echo $select;
              $con->query($select); 
              $data = json_decode( $data, true );
            }
            
             // $data = json_decode( $data, true );
         }
       
        ?>
    </body>
</html>
