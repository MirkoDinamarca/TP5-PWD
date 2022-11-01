<?php

class Model_usuario extends BaseDatos {
    private $idusuario;
    private $usnombre;
    private $uspass;
    private $usmail;
    private $usdeshabilitado;
    private $mensajeOperacion;

    public function __construct() {
        parent::__construct();
        $this->idusuario = "";
        $this->usnombre = "";
        $this->uspass = "";
        $this->usmail = "";
        $this->usdeshabilitado = "";
        $this->mensajeOperacion = "";
    }

    public function setearValores($idusuario, $usnombre, $uspass, $usmail, $usdeshabilitado) {
        $this->setIdUsuario($idusuario);
        $this->setUserNombre($usnombre);
        $this->setUserPass($uspass);
        $this->setUserMail($usmail);
        $this->setUserDeshabilitado($usdeshabilitado);
    }

    public function getIdUsuario() {
        return $this->idusuario;
    }
    public function setIdUsuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function getUserNombre() {
        return $this->usnombre;
    }
    public function setUserNombre($usnombre) {
        $this->usnombre = $usnombre;
    }

    public function getUserPass() {
        return $this->uspass;
    }
    public function setUserPass($uspass) {
        $this->uspass = $uspass;
    }

    public function getUserMail() {
        return $this->usmail;
    }
    public function setUserMail($usmail) {
        $this->usmail = $usmail;
    }

    public function getUserDeshabilitado() {
        return $this->usdeshabilitado;
    }
    public function setUserDeshabilitado($usdeshabilitado) {
        $this->usdeshabilitado = $usdeshabilitado;
    }

    public function getmensajeoperacion() {
        return $this->mensajeOperacion;
    }
    public function setMsjOperacion($valor) {
        $this->mensajeOperacion = $valor;
    }

    /**
     * Inserta un nuevo usuario a la BD
     * (Aún no se hicieron inserciones en la BD, no sabemos si funciona)
     */

    public function Insertar() {
        $rta = false;

        $query = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado)
                  VALUES ('" . $this->getUserNombre() . "','" . $this->getUserPass() . "','" . $this->getUserMail() . "','" . $this->getUserDeshabilitado() . "')";

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
     * Método para modificar un usuario de la BD
     * (Aún no se hicieron modificaciones en la BD, no sabemos si funciona)
     */

    public function Modificar() {
        $rta = false;
        $query = "UPDATE usuario SET idusuario='" . $this->getIdUsuario() . "',usnombre='" . $this->getUserNombre() . "',uspass='" . $this->getUserPass() . "',usmail='" . $this->getUserMail() . "',usdeshabilitado='" . $this->getUserDeshabilitado() . "'
                 WHERE idusuario ='" . $this->getIdUsuario() . "'";

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
     * Método para eliminar un usuario de la BD
     * (Aún no se eliminaron datos en la BD, no sabemos si funciona)
     */

    public function Eliminar() {
        $rta = false;

        $query = "DELETE FROM usuario WHERE idusuario=" . $this->getIdUsuario();

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
     * Recupera los datos de un usuario a través de su $idusuario
     * (Probar si funciona)
     * @param idusuario int
     */
    public function Buscar($idusuario) {

        $query = "SELECT * FROM usuario WHERE idusuario =" . $idusuario;

        $rta = false;

        if ($this->Iniciar()) {
            if ($this->Ejecutar($query)) {
                if ($row = $this->Registro()) {
                    $this->setearValores($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);
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
     * Retorna un arreglo de objetos desde la base de datos de la tabla Usuario
     * @param parametro Es el parámetro que se pasa al método, que es la condición de la consulta.
     * @return An array de objetos.
     * (Probar si funciona)
     */
    public function Listar($parametro = '') {
        $listaUsuarios = [];
        
        $query = "SELECT * FROM usuario ";
        if ($parametro != '') {
            $query .= 'WHERE ' . $parametro;
        }

        $rta = $this->Ejecutar($query);
        if ($rta > -1) {
            if ($rta > 0) {
                while ($row = $this->Registro()) {
                    $objUsuario = new Model_usuario();
                    $objUsuario->Buscar($row['idusuario']);
                    $listaUsuarios[] = $objUsuario;
                }
            }
        } else {
            $this->setMsjOperacion($this->getError());
        }

        return $listaUsuarios;
    }
}


?>