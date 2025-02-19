<?php

class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function formatada()
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}