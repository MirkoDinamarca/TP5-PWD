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
     /**
     * Inserta un nuevo usuario usuariorol a la BD
     * (Aún no se hicieron inserciones en la BD, no sabemos si funciona)
     */

    public function Insertar() {
        $rta = false;

        $query = "INSERT INTO usuariorol(idusuario, idrol)
                  VALUES ('" . $this->getObjUsuario()->getidusuario() . "','" . $this->getObjRol()->getIdRol(). "')";

        if ($this->Iniciar()) {
            if ($this->Ejecutar($query)) {
                $rta = true;
            } else {
                $this->getError();
            }
        } else {
            $this->getError();
        }

        return $rta;
    }
  

       /**
     * Método para eliminar un usuariorol de la BD
     * (Aún no se eliminaron datos en la BD, no sabemos si funciona)
     */

    public function Eliminar() {
        $rta = false;

        $query = "DELETE FROM usuariorol WHERE idusuario=" . $this->getObjUsuario()->getidusuario();

        if ($this->Iniciar()) {
            if ($this->Ejecutar($query)) {
                $rta = true;
            } else {
                $this->getError();
            }
        } else {
            $this->getError();
        }

        return $rta;
    }

        /**
     * Recupera los datos de un usuariorol a través de su $idusuario
     * (Probar si funciona)
     * @param idusuario int
     */
    public function Buscar($idusuario) {

        $query = "SELECT * FROM usuariorol WHERE idusuario =" .$idusuario;

        $rta = false;

        if ($this->Iniciar()) {
            if ($this->Ejecutar($query)) {
                if ($row = $this->Registro()) {
                    $objUsuario = new Model_usuario();
                    $objUsuario->Buscar($row['idusuario']);
                    $objRol = new Model_rol();
                    $objRol->Buscar($row['idrol']);

                    $this->setearValores($objUsuario,$objRol);

                    $rta = true;
                }
            } else {
                $this->setMsjOperacion($this->getError());
            }
        } else {
            $this->setMsjOperacion($this->getError());
        }
        return $rta;
    }

}


?>