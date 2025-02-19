<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 30/08/17
 * Time: 15:58
 */
class Conta
{
    public $numero;
    public $dono;
    public $cpf;
    private $saldo = 0;
    public static $totalContas = 0;

    function __construct() {
       self::$totalContas++;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function saca(float $valor) :bool {
        if ($valor < $this->saldo){
            $this->saldo = $this->saldo - $valor;
            return true;
        } else{
            return false;
        }
    }

    public function deposita(float $valor){

        if ($valor > 0){
            $this->saldo += $valor;
        }
    }

    public function transferePara(Conta $contaDestino, float $valor){

        $deuCerto = $this->saca($valor);

        if ($deuCerto){
            $contaDestino->deposita($valor);
        }
    }
}

