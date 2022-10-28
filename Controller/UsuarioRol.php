<?php
class UsuarioRol{

public function newUsuarioRol($datos) {
    $objUsuarioRol = new Model_usuariorol();
    $objUsuario = new Model_usuario();
    $objRol = new Model_rol();

    $validacion = [];

    $idusuario = $datos['idusuario'];

    $objUsuario->Buscar($idusuario);

    $idrol = $datos['idrol'];

    $objRol->Buscar($idrol);

if (!empty($objUsuario->getIdUsuario())) {

        if (isset($datos)) {
            
            $objUsuarioRol->setearValores($objUsuario, $objRol);
            
            if ( $objUsuarioRol->Insertar()) {
                $validacion['insercion'] = true;
            } else {
                $validacion['insercion'] = false;
            }

        }
        $validacion['usuario'] = true;
    } else {
        $validacion['usuario'] = false;
    }

    return $validacion;
}


    /**
     * Este método devuelve una lista de usuarios de la base de datos, filtrada por el id del usuario si se proporciona.
     * @param param array(1) 
     * @return An array de objetos.
     */
    public function buscar($param = NULL) {
        $objUsuarioRol = new Model_usuariorol();
     
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['idusuario'])) {
                $where.= " AND idusuario = " . $param['idusuario'];
            }
        }

        $usuarioRol = $objUsuarioRol->listar($where);
        return $usuarioRol;
    }

    public function actualizarUsuario($datos) {
        $objUsuarioRol = new Model_usuariorol();
        $objUsuario = new Model_usuario();
        $objRol = new Model_rol();
    
        $idusuario = $datos['idusuario'];
    
        $objUsuario->Buscar($idusuario);
    
        $idrol = $datos['idrol'];
    
        $objRol->Buscar($idrol);

        if (isset($datos)) {

            $validacion = false;
            $objUsuarioRol->setearValores($objUsuario, $objRol);
            
            if ($objUsuarioRol->Modificar()) {
                $validacion = true;
            }

            return $validacion;
        }
    }
    public function eliminarUsuarioRol($datos)
    {
        $objUsuarioRol = new Model_usuariorol();

        $eliminacion = [];

        $idUsuarioRol = $datos['idusuario'];

        $objUsuarioRol->Buscar( $idUsuarioRol);

        if (!empty($objUsuarioRol->getobjUsuario())) {

            if (isset($datos)) {

                // $objRol->setearValores($datos['idrol'], $datos['rodescripcion']); Comentado por ahora fijarse despues

                if ($objUsuarioRol->Eliminar()) {
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

}