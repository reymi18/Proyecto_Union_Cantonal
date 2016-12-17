<?php


class Asociacion {
    
    
private $nombre;
private $direccion;
private $correo;
private $telefono;
private $id_asociacion;
private $clave;
private $foto_perfil; 

public function Asociacion($nombre,$direccion,$correo,$telefono,$id_asociacion,$clave,$foto_perfil) {
    
    $this->nombre=$nombre;
    $this->clave=$clave;
    $this->correo=$correo;
    $this->direccion=$direccion;
    $this->foto_perfil=$foto_perfil;
    $this->id_asociacion=$id_asociacion;
    $this->telefono=$telefono;
}

function getNombre() {
    return $this->nombre;
}

function getDireccion() {
    return $this->direccion;
}

function getCorreo() {
    return $this->correo;
}

function getTelefono() {
    return $this->telefono;
}

function getId_asociacion() {
    return $this->id_asociacion;
}

function getClave() {
    return $this->clave;
}

function getFoto_perfil() {
    return $this->foto_perfil;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setDireccion($direccion) {
    $this->direccion = $direccion;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setTelefono($telefono) {
    $this->telefono = $telefono;
}

function setId_asociacion($id_asociacion) {
    $this->id_asociacion = $id_asociacion;
}

function setClave($clave) {
    $this->clave = $clave;
}

function setFoto_perfil($foto_perfil) {
    $this->foto_perfil = $foto_perfil;
}


}
