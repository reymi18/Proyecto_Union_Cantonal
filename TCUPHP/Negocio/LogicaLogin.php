<?php

include_once '../Data/Database.php';

class claseUsuario{
    
 function sql($csql){
    
    
    $obj = new Conexion();
    return $obj->consulta($csql);
    
}


function validar_cuenta($usuario,$contrasenia) {
    
    $csql = "select *from asociacion where correo= '".$usuario."' and clave= '".$contrasenia."'";
    $ejecutar= $this->sql($csql);
    
    return $ejecutar;
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
}
?>
