<?php

class Rol
{

    public function cargarRol($datos)
    {
        $objRol = new Model_rol();

        $validacion = [];

        $idRol = $datos['idrol'];

        $objRol->Buscar($idRol);

        if (!empty($objRol->getIdRol())) {

            if (isset($datos)) {

                $objRol->setearValores($datos['idrol'], $datos['rodescripcion']);

                if ($objRol->Insertar()) {
                    $validacion['insercion'] = true;
                } else {
                    $validacion['insercion'] = false;
                }
            }
            $validacion['persona'] = true;
        } else {
            $validacion['persona'] = false;
        }
        return $validacion;
    }

    public function actualizarRol($datos)
    {
        $objRol = new Model_rol();

        $actualizacion = [];

        $idRol = $datos['idrol'];

        $objRol->Buscar($idRol);

        if (!empty($objRol->getIdRol())) {

            if (isset($datos)) {

                $objRol->setearValores($datos['idrol'], $datos['rodescripcion']);

                if ($objRol->Modificar()) {
                    $actualizacion['actualizar'] = true;
                } else {
                    $actualizacion['actualizar'] = false;
                }
            }
            $actualizacion['persona'] = true;
        } else {
            $actualizacion['persona'] = false;
        }
        return $actualizacion;
    }

    public function eliminarRol($datos)
    {
        $objRol = new Model_rol();

        $eliminacion = [];

        $idRol = $datos['idrol'];

        $objRol->Buscar($idRol);

        if (!empty($objRol->getIdRol())) {

            if (isset($datos)) {

                // $objRol->setearValores($datos['idrol'], $datos['rodescripcion']); Comentado por ahora fijarse despues

                if ($objRol->Eliminar()) {
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

    /**
     * Este método devuelve una lista de roles de la base de datos, filtrada por la idrol si se proporciona.
     */
    public function Buscar($param = NULL) {
        $objRol = new Model_rol();
        $where = " true ";
        if ($param != NULL) {
            if (isset($param['idrol'])) {
                $where.= " AND idrol ='" . $param['idrol']. "'";
            }

            if (isset($param['rodescripcion'])) {
                $where.= " AND rodescripcion ='" . $param['rodescripcion']. "'";
            }
        }

        $roles = $objRol->listar($where);
        return $roles;
    }
}
