<?php
class Usuario{

public function newUsuario($datos) {
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
    public function buscar($param = NULL) {
        $objUsuario = new Model_usuario();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['idusuario'])) {
                $where.= " AND idusuario = " . $param['idusuario'];
            }
        }

        $usuario = $objUsuario->listar($where);
        return $usuario;
    }

    public function actualizarUsuario($datos) {
        $objUsuario = new Model_usuario();

        if (isset($datos)) {

            $validacion = false;
            $objUsuario->setearValores($datos['usnombre'], $datos['uspass'], $datos['usmail'], $datos['usdeshabilitado']);
            
            if ( $objUsuario->Modificar()) {
                $validacion = true;
            }

            return $validacion;
        }
    }

}