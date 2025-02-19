<?php

abstract class Funcionario
{
    protected $nome;
    protected $departamento;
    protected $salario;
    private $cpf;
    private $dataEntrada;
    const SALARIO_DECIMO_TERCEIRO_E_FERIAS = 13.3;

    function __construct(string $nomeInformado)
    {
        $this->nome = $nomeInformado;
    }

    public abstract function getBonificacao()
    {
        return $this->salario * 0.1;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function recebeAumento(float $aumentoPercentual)
    {
        $this->salario += $this->salario * $aumentoPercentual;
        return $this->salario;
    }

    public function calculaGanhoAnual() :float
    {
        $ganhoAnual = $this->salario * self::SALARIO_DECIMO_TERCEIRO_E_FERIAS;
        return $ganhoAnual;
    }

    public function setDataEntrada(data $dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
    }

    public function mostra()
    {
        echo "O funcionário {$this->getCpf()}, que se chama {$this->nome} trabalha no departamento {$this->departamento} e tem o salário de {$this->salario} reais.\n";

        echo "Seu ganho anual é de {$this->calculaGanhoAnual()} reais. \n";

        echo "Sua data de entrada foi {$this->dataEntrada->formatada()}.";

        echo "\n";
    }
}