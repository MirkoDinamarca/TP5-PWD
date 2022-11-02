<?php

class Sesion {

    public function __construct()
    {
        // Inicia la sesión
        session_start();
    }

    /**
     * Actualiza las variables de sesión con los valores ingresados.
     */
    public function iniciar($usuario, $pass) {
        $_SESSION['usnombre'] = $usuario;
        $_SESSION['uspass'] = $pass;
    }

    /**
     * Valida si la sesión actual tiene usuario y password válidos
     * @return bool
     */
    public function validar() {
        $rta = false;

        $usnombre = $_SESSION['usnombre'];
        $uspass = $_SESSION['uspass'];

        $parametros = ['usnombre' => $usnombre, 'uspass' => $uspass];
        $usuario = new Usuario();

        $listaUsuario = $usuario->buscar($parametros);
        /* echo '<pre>';
        var_dump($listaUsuario);
        echo '</pre>'; */

        if ($listaUsuario != NULL) {
            $rta = true;
        }

        return $rta;
    }

    /**
     * Devuelve un booleano si la sesión está activa o no
     * @return bool
     */
    public function activa() {
        $rta = false;

        if (session_status() == PHP_SESSION_ACTIVE)
            $rta = true;

        return $rta;

    }

    /**
     * Devuelve el usuario logueado
     */
    public function getUsuario() {
        if ($this->validar() && $this->activa()) {
            $usuario = new Model_usuario();
            $listaUsuario = $usuario->Listar($_SESSION);

            echo '<pre>';
            var_dump($listaUsuario);
            echo '</pre>';

            $usuarioLogueado = $listaUsuario[0]; // ¿Esto está bien? Tengo mis duditas :s
        }

        return $usuarioLogueado;
    }

    /**
     * Devuelve el rol del usuario logueado
     */
    public function getRol() {
        if ($this->getUsuario() != NULL) {
            $usuarioLogueado = $this->getUsuario();

            $login['idusuario'] = $usuarioLogueado->getIdUsuario();

            /* $objRol = new Model_rol();
            $objRol->Buscar($login);
            $rol['idrol'] = $objRol->getIdRol(); */

            $objUsuarioRol = new Model_usuariorol();
            $roles = $objUsuarioRol->Buscar($login);
        }

        return $roles;
    }

    /**
     * Destruye la sesión
     */
    public function cerrar() {
        $verificacion = false;
        if ($this->activa()) {
            unset($_SESSION['usnombre']);
            unset($_SESSION['uspass']);
            session_destroy();
            $verificacion = true;
        }
        return $verificacion;

    }
}
