<?php
    if(isset($_POST["btncalcular"])){

    require_once 'Consecutivo.php';

    $consecutivo = new Consecutivo();

    $valor = $_POST["txtvalor"];

    $consecutivo -> setValornum($valor);

    $consecutivo-> sumaNumConse();

    }


?>