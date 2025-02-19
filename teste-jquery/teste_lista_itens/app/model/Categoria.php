<?php

class Categoria{

    private $id;
    private $nome;
    private $descricao;

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return utf8_encode($this->descricao);
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return utf8_encode($this->nome);
    }

}