<?php

//@JunioSantos
interface IProduct {
     public function getId();
     public function setId($id);
     public function getNome();
     public function setNome($nome);
     public function getDescr();
     public function setDescr($descr);
}