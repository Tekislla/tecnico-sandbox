<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 29/09/17
 * Time: 10:56
 */
class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function formatada(){
        return "$this->dia/$this->mes/$this->ano";
    }
}