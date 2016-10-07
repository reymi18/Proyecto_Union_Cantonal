<?php

require_once 'conexion.php';

//echo " llego ";

        $nom=$_REQUEST["txtnom"];
        $id_Neogico=$_REQUEST["idNego"];
        $foto=$_FILES["foto"] ["name"];
        $ruta=$_FILES["foto"] ["tmp_name"];
        $destino="fotos/".$foto;
        copy($ruta, $destino);
        $idUltimaFoto=0;
        
       
  //       echo " valor===== $id_Neogico";
       // $sql=  mysql_query("SELECT * FROM info_negocio_guapiles.negocio ORDER BY codigo DESC LIMIT 1;"); 
         $sql=  mysql_query("SELECT * FROM info_negocio_guapiles.imagenes ORDER BY id DESC LIMIT 1;");
        while($res= mysql_fetch_assoc($sql)){
             echo $res["id"]."<br>";
             $idUltimaFoto=$res["id"];
          
             }
            
            $idUltimaFoto=$idUltimaFoto+1;
            
          //  echo  " valor ID " + $idUltimaFoto ;
          
        
        
         
       mysql_query("insert into imagenes (id,id_negocio,imagen,tipo) values ($idUltimaFoto,$id_Neogico,'$destino','$nom')");    
       header("Location: index.php");
        
       
        header ("Location: http://localhost:8084/WebCCATUSPO/negocioaction.do?method=getImagenes&valor=$id_Neogico");
        ?>


