<?php

class Model_rol extends BaseDatos {
    private $idrol;
    private $rodescripcion;
    private $mensajeOperacion;

    public function __construct() {
        $this->idrol = "";
        $this->rodescripcion = "";
        $this->mensajeOperacion = "";
    }

    public function setearValores($idrol, $rodescripcion) {
        $this->setIdRol($idrol);
        $this->setRoDescripcion($rodescripcion);
    }

    public function getIdRol() {
        return $this->idrol;
    }
    public function setIdRol($idrol) {
        $this->idrol = $idrol;
    }

    public function getRoDescripcion() {
        return $this->rodescripcion;
    }
    public function setRoDescripcion($rodescripcion) {
        $this->rodescripcion = $rodescripcion;
    }

    public function getmensajeoperacion() {
        return $this->mensajeOperacion;
    }
    public function setMsjOperacion($valor) {
        $this->mensajeOperacion = $valor;
    }

    /**
     * Inserta un nuevo rol a la BD
     * (Aún no se hicieron inserciones en la BD, no sabemos si funciona)
     */

    public function Insertar() {
        $rta = false;

        $query = "INSERT INTO rol(rodescripcion)
                  VALUES ('" . $this->getRoDescripcion() . "')";

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
     * Método para modificar un rol de la BD
     * (Aún no se hicieron modificaciones en la BD, no sabemos si funciona)
     */

    public function Modificar() {
        $rta = false;
        $query = "UPDATE rol SET idrol='" . $this->getIdRol() . "',rodescripcion='" .  "' WHERE idrol ='" . $this->getIdRol() . "'";

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
     * Método para eliminar un rol de la BD
     * (Aún no se eliminaron datos en la BD, no sabemos si funciona)
     */

    public function Eliminar() {
        $rta = false;

        $query = "DELETE FROM rol WHERE idrol=" . $this->getIdRol();

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
     * Recupera los datos de un rol a través de su $idrol
     * (Probar si funciona)
     * @param idusuario int
     */
    public function Buscar($idrol) {

        $query = "SELECT * FROM rol WHERE idrol =" . $idrol;

        $rta = false;

        if ($this->Iniciar()) {
            if ($this->Ejecutar($query)) {
                if ($row = $this->Registro()) {
                    $this->setearValores($row['idrol'], $row['rodescripcion']);
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

    /**
     * Retorna un arreglo de objetos desde la base de datos de la tabla Rol
     * @param parametro Es el parámetro que se pasa al método, que es la condición de la consulta.
     * @return An array de objetos.
     * (Probar si funciona)
     */
    public function Listar($parametro = '') {
        $rta = false;
        $listaRoles = [];

        $query = "SELECT * FROM rol ";

        if ($parametro != '') {
            $query .= 'WHERE ' . $parametro;
        }

        $rta = $this->Ejecutar($query);

        if ($rta > -1) {
            if ($rta > 0) {
                while ($row = $this->Registro()) {
                    $objRol = new Model_rol();
                    $objRol->Buscar($row['idrol']);
                    $listaRoles[] = $objRol;
                }
            }
        } else {
            $this->setMsjOperacion($this->getError());
        }

        return $listaRoles;
    }
}


?>