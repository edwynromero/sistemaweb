<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Valerta_deudores extends Talerta_deudores{
    function __construct(CI_DB_mysqli_driver $conexion, $codigo = null) {
        parent::__construct($conexion, $codigo);
    }
}
?>