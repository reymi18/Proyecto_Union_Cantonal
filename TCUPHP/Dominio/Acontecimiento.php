<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acontecimiento
 *
 * @author oscar
 */
class Acontecimiento {

private $nombre;
private $sitio;
private $fecha;
private $descripcion;
private $idAcon;
private $idSocia;

public function  Acontecimiento($nombre,$sitio,$fecha,$descripcion,$idAcon,$idSocia){
    
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
    $this->fecha=$fecha;
    $this->sitio=$sitio;
    $this->idAcon=$idAcon;
    $this->idSocia=$idSocia;
    
    
    
}
        function getNombre() {
    return $this->nombre;
}

function getSitio() {
    return $this->sitio;
}

function getFecha() {
    return $this->fecha;
}

function getDescripcion() {
    return $this->descripcion;
}

function getIdAcon() {
    return $this->idAcon;
}

function getIdSocia() {
    return $this->idSocia;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setSitio($sitio) {
    $this->sitio = $sitio;
}

function setFecha($fecha) {
    $this->fecha = $fecha;
}

function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
}

function setIdAcon($idAcon) {
    $this->idAcon = $idAcon;
}

function setIdSocia($idSocia) {
    $this->idSocia = $idSocia;
}



//put your code here
}
