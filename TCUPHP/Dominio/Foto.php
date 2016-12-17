<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Foto
 *
 * @author oscar
 */
class Foto {
    private $nombre;
    private $direccion;
    private $id_foto;
    private  $id_acontecimiento;
    
   public function Foto($nombre, $direccion, $id_foto, $id_acontecimiento) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->id_foto = $id_foto;
        $this->id_acontecimiento = $id_acontecimiento;
    }

    
    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getId_foto() {
        return $this->id_foto;
    }

    function getId_acontecimiento() {
        return $this->id_acontecimiento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setId_foto($id_foto) {
        $this->id_foto = $id_foto;
    }

    function setId_acontecimiento($id_acontecimiento) {
        $this->id_acontecimiento = $id_acontecimiento;
    }


}
