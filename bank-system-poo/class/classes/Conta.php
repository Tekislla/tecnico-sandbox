<?php

class conta
{
    public $numero;
    public $cpf;
    public $dono;
    protected $saldo = 0;
    public static $totalContas = 0;

    function __construct()
    {
        self::$totalContas++;
    }

    public function atualiza(float $taxa)
    {
        $this->saldo += $this->saldo * $taxa;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function saca(float $valor) :bool
    {
        if ($valor < $this->saldo) {
            $this->saldo = $this->saldo - $valor;
            return true;
        } else{
            return false;
        }
    }

    public function deposita(float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function transferePara(conta $contaDestino, float $valor)
    {
        $deuCerto = $this->saca($valor);

        if ($deuCerto){
            $contaDestino->deposita($valor);
        }
    }

}