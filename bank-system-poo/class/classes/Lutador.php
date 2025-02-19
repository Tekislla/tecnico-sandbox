<?php

class lutador
{
    public $nome;
    public $idade;
    private $peso;
    private $numeroVitorias;
    private $numeroDerrotas;
    private $categoria;

    function __construct($nome, $idade, $peso, $vitorias, $derrotas)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setPeso($peso);
        $this->numeroVitorias = $vitorias;
        $this->numeroDerrotas = $derrotas;
    }

    public function apresenta()
    {
        echo "Ladies and Gentlemen, com {$this->idade} anos, pesando {$this->peso} kilos, com {$this->numeroVitorias} vitorias e {$this->numeroDerrotas} derrotas, na categoria peso {$this->categoria}. {$this->nome}.\n";
    }

    public function setCategoria()
    {
        if ($this->peso <= 60){
            $this->categoria = "Pena";
        } elseif($this->peso <= 80){
            $this->categoria = "Médio";
        } else {
            $this->categoria = "Pesado";
        }
    }

    public function ganhaLuta($numero)
    {
        $this->numeroVitorias = $this->numeroVitorias + $numero;
    }

    public function perdeLuta($numero)
    {
        $this->numeroDerrotas = $this->numeroDerrotas + $numero;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($pesoInformado)
    {
        if ($pesoInformado > 0) {
            $this->peso = $pesoInformado;
        } else {
            $this->peso = 1;
        }
        $this->setCategoria();
    }
}