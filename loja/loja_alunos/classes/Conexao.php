<?php

class Conexao
{
    const R = "localhost";
    const N = "bd_loja_2info2";
    const U = "root";
    const S = "root";

    private static $conexao = null;

    public static function getConexao()
    {
        if(self::$conexao == null)
        {
            $conexao = new PDO("mysql:host=" . self::R . ";dbname=" . self::N , self::U, self::S);

            //MOSTRAR OS ERROS OCORRIDOS NO BANCO
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$conexao = $conexao;
        }

        return self::$conexao;
    }

}
//TESTE CONEXÃO
Conexao::getConexao();