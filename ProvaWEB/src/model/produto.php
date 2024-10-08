<?php
Namespace Avaliacao\Web\model;

class produto{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $estoque;
    private $userInsert;
    private $data_hora;

    public function __construct($nome, $descricao, $preco, $estoque, $userInsert, $data_hora){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->userInsert = $userInsert;
        $this->data_hora = $data_hora;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }  
    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
    
    public function getEstoque() {
        return $this->estoque;
    }
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
    
    public function getUserInsert() {
        return $this->userInsert;
    }
    public function setUserInsert($userInsert) {
        $this->userInsert = $userInsert;
    }

    public function getData_Hora() {
        return $this->data_hora;
     } 
    public function setData_Hora($data_hora) {
       $this->data_hora = $data_hora;
    } 
}