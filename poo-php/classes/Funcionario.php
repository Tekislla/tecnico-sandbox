<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 27/09/17
 * Time: 15:57
 */
class Funcionario
{
    private $nome;
    protected $departamento;
    protected $salario;
    private $dataEntrada;
    private $CPF;
    const  SALARIO_DECIMO_TERCEIRO_E_FERIAS = 13.3;

    function __construct(string $nomeInformado) {

        $this->nome = $nomeInformado;

    }

    public function recebeAumento(float $aumentoPercentual){
        $this->salario += $this->salario * $aumentoPercentual;
    }

    public function calculaGanhoAnual(): float {

        $ganhoAnual = $this->salario * self::SALARIO_DECIMO_TERCEIRO_E_FERIAS;
        return $ganhoAnual;

    }

    public function setDataEntrada(Data $dataEntrada) {
        $this->dataEntrada = $dataEntrada;
    }

    public function mostra(){
        echo "O funcionario {$this->CPF} trabalha no departameto {$this->departamento} 
        com salario de {$this->salario} \n";

        echo "Seu ganho anual é de ".$this->calculaGanhoAnual();

        echo "Sua data de entrada foi 
        {$this->dataEntrada->formatada()}";

        echo "\n";
    }

    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @param mixed $departamento
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * @param mixed $CPF
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }



}

