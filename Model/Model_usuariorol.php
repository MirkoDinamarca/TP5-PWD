<?php

class Model_usuariorol extends BaseDatos {
    private $objUsuario;
    private $objRol;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->objUsuario = "";
        $this->objRol = "";
        $this->mensajeOperacion = "";
    }

    public function getObjUsuario() {
        return $this->objUsuario;
    }
    public function setObjUsuario($objUsuario) {
        $this->objUsuario = $objUsuario;
    }

    public function getObjRol() {
        return $this->objRol;
    }
    public function setObjRol($objRol) {
        $this->$objRol = $objRol;
    }

    public function getmensajeoperacion() {
        return $this->mensajeOperacion;
    }
    public function setMsjOperacion($valor) {
        $this->mensajeOperacion = $valor;
    }

    // Hay que hacer los métodos Insertar, Modificar, Eliminar, Buscar y Listar?
}


?>