<?php

use App\Models\Calculo;

if (!empty($_POST['valor1']) && !empty($_POST['valor2'])) {
    $data = $_POST;
    $calcular = new Calculo($data['valor1'], $data['valor2']);
    $resultado = $calcular->calculo($data['operacao']);
    $html = templateResultado($data['valor1'], $data['valor2'], $data['operacao'], $resultado);
    __($html);
}
