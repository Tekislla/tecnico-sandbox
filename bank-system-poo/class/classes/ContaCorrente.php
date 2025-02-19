<?php

class ContaCorrente extends Conta
{
    public function atualiza(float $taxa)
    {
        $taxa = $taxa * 2;
        $this->saldo += $this->saldo * $taxa;
    }

    public function deposita(float $valor)
    {
        $valor = $valor - 0.1;
        parent::deposita($valor);
    }

}