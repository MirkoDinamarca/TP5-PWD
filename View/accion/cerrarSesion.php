<?php

include_once('../../configuracion.php');

if ($sesion->cerrar()) {
    Header('Location: ../../index.php');
}

?>