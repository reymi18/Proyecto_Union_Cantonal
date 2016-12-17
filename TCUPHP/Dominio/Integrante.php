<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Integrante
 *
 * @author oscar
 */
class Integrante {
    private $nombre;
    private $apellidos;
    private $telefonos;
    private $correo;
    private $cedula;
    private $puesto;
    private $idSocia;
    
    
    public function Integrante ($nombre,$apellidos,$telefonos,$correo,$cedula,$puesto,$idSocia){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->cedula=$cedula;
        $this->correo=$correo;
        $this->puesto=$puesto;
        $this->idSocia=$idSocia;
        $this->telefonos=$telefonos;
        
    }
    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefonos() {
        return $this->telefonos;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getPuesto() {
        return $this->puesto;
    }

    function getIdSocia() {
        return $this->idSocia;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setTelefonos($telefonos) {
        $this->telefonos = $telefonos;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    function setIdSocia($idSocia) {
        $this->idSocia = $idSocia;
    }


    
}
