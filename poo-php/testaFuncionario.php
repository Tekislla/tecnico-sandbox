<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Data.php";


    $dataEntrada = new Data();
    $dataEntrada->dia = 4;
    $dataEntrada->mes = 9;
    $dataEntrada->ano = 2001;


    $seguranca = new Funcionario("Kleber");

    $seguranca->setDepartamento("Segurança Cofre");
    $seguranca->setSalario(3000);
    $seguranca->setCPF("0980989898");
    $seguranca->setDataEntrada($dataEntrada);


    $seguranca->recebeAumento(0.5);

    $seguranca->mostra();


