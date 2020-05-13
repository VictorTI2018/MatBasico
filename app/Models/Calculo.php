<?php

namespace App\Models;

class Calculo
{


    private $valor1;
    private $valor2;

    public function __construct(
        float $valor1,
        float $valor2
    ) {
        $this->setValor1($valor1);
        $this->setValor2($valor2);
    }

    public function getValor1()
    {
        return $this->valor1;
    }

    public function getValor2()
    {
        return $this->valor2;
    }

    public function setValor1(float $valor1)
    {
        $this->valor1 = $valor1;
    }

    public function setValor2(float $valor2)
    {
        $this->valor2 = $valor2;
    }

    public function calculo($operation)
    {
        $result = 0;
        switch ($operation) {
            case '+':
                $result = $this->getValor1() + $this->getValor2();
                break;
            case '-':
                $result = $this->getValor1() - $this->getValor2();
                break;
            case '*':
                $result = $this->getValor1() * $this->getValor2();
                break;
            case '/':
                $result = $this->getValor1() / $this->getValor2();
                break;
        }
        return number_format($result, 1, ',', '.');
    }
}
