<?php
class Usuario
{

    public function newUsuario($datos)
    {
        $objUsuario = new Model_usuario();

        if (isset($datos)) {

            $validacion = false;
            $objUsuario->setearValores($datos['idusuario'], $datos['usnombre'], $datos['uspass'], $datos['usmail'], $datos['usdeshabilitado']);

            if ($objUsuario->Insertar()) {
                $validacion = true;
            }


            return $validacion;
        }
    }
    /**
     * Este método devuelve una lista de usuarios de la base de datos, filtrada por el id del usuario si se proporciona.
     * @param param array(1) 
     * @return An array de objetos.
     */
    public function buscar($param = NULL)
    {
        $objUsuario = new Model_usuario();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['idusuario'])) {
                $where .= " AND idusuario = " . $param['idusuario'];
            }
            if (isset($param['usnombre'])) {
                $where .= " AND usnombre = '" . $param['usnombre']."'";
            }
            if (isset($param['uspass'])) {
                $where .= " AND uspass = " . $param['uspass'];
            }
            if (isset($param['usdeshabilitado'])) {
                $where .= " AND usdeshabilitado = " . $param['usdeshabilitado'];
            }
        }

        $usuario = $objUsuario->Listar($where);
        return $usuario;
    }

    public function actualizarUsuario($datos)
    {
        $objUsuario = new Model_usuario();

        if (isset($datos)) {

            $validacion = false;
            $objUsuario->setearValores($datos['idusuario'], $datos['usnombre'], $datos['uspass'], $datos['usmail'], $datos['usdeshabilitado']);

            if ($objUsuario->Modificar()) {
                $validacion = true;
            }

            return $validacion;
        }
    }

    public function eliminarUsuario($datos)
    {
        $objUsuario = new Model_usuario();

        $eliminacion = [];

        $idUsuario = $datos['idusuario'];

        $objUsuario->Buscar($idUsuario);

        if (!empty($objUsuario->getIdUsuario())) {

            if (isset($datos)) {

                // $objRol->setearValores($datos['idrol'], $datos['rodescripcion']); Comentado por ahora fijarse despues

                if ($objUsuario->Eliminar()) {
                    $eliminacion['eliminar'] = true;
                } else {
                    $eliminacion['eliminar'] = false;
                }
            }
            $eliminacion['persona'] = true;
        } else {
            $eliminacion['persona'] = false;
        }
        return $eliminacion;
    }

    public function metodoPrueba() {
        $hola = 'Hola esto anda';
        return $hola;
    }
}
