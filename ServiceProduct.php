<?php
//@JunioSantos

class ServiceProduct {
   private $db;
   private $product;
   
   public function __construct(IConn $db,IProduct $product) {
       $this->db = $db->connect();
       $this->product = $product;
   }
   
   public function listar()
   {
       $query = "select * from product";
       $stmt = $this->db->prepare($query);
       $stmt->execute();
       
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   public function find(int $id){
       $query ="select * from product where id=:id";
       $stmt = $this->db->prepare($query);
       $stmt->bindValue(":id",$id);
       $stmt->execute();
       return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function salvar()
   {
   $query = "insert into product(nome,descr) values (:nome,:descr)";
   $stmt = $this->db->prepare($query);
   $stmt->bindValue(":nome", $this->product->getNome());
   $stmt->bindValue(":descr", $this->product->getDescr());
   $stmt->execute();
   
   return $this->db->lastInsertId();
   }
   public function update()
   {
       $query ="update product set nome=?, descr=? where id=?";
       $stmt = $this->db->prepare($query);
       $stmt->bindValue(1, $this->product->getNome());
       $stmt->bindValue(2, $this->product->getDescr());
       $stmt->bindValue(3, $this->product->getId());
       $ret = $stmt->execute();
       return $ret;
   }
   public function delete(int $id)
   {
       $query ="delete from product where id=:id";
       $stmt = $this->db->prepare($query);
       $stmt->bindValue(":id",$id);
       $ret = $stmt->execute();
       return $ret;
   }
}
