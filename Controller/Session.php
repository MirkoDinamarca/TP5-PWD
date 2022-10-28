<?php

class Session {

    public function __construct()
    {
        session_start();
    }

    public function iniciar($usuario, $password) {
        $_SESSION['usnombre'] = $usuario;
        $_SESSION['uspass'] = $password;
    }

    public function validar() {
        $rta = false;

        $usuario = new Usuario();

        $listaUsuario = $usuario->Buscar($_SESSION);

        if ($listaUsuario != NULL) {
            $rta = true;
        }

        return $rta;
    }

    public function activa() {
        $rta = false;

        if (session_status() == PHP_SESSION_ACTIVE)
            $rta = true;

        return $rta;

    }

    public function getUsuario() {
        if ($this->validar() && $this->activa()) {
            $usuario = new Usuario();
            $listaUsuario = $usuario->Buscar($_SESSION);

            echo '<pre>';
            var_dump($listaUsuario);
            echo '</pre>';

            $usuarioLogueado = $listaUsuario[0];
        }

        return $usuarioLogueado;
    }

    public function getRol() {

    }

    public function cerrar() {

    }
}


?>