<?php

class ControleBonificacoes
{
    private $totalPago;

    public function registra(Funcionario $funcionario)
    {
        $this->totalPago += $funcionario->getBonificacao();
    }

    public function getTotalPago()
    {
        return $this->totalPago;
    }

    public function mostra()
    {
        echo "O total de bonificações pagas pelo banco foi de: {$this->getTotalPago()} reais.";
    }
}
