<?php

//@JunioSantos
require_once 'IProduct.php';

class Product implements IProduct {
    private $id;
    private $nome;
    private $descr;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescr() {
        return $this->descr;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setDescr($descr) {
        $this->descr = $descr;
        return $this;
    }


}
