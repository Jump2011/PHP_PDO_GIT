<?php
//@JunioSantos

require_once 'Conn.php';
require_once 'IConn.php';
require_once 'Product.php';
require_once 'IProduct.php';
require_once 'ServiceProduct.php';

$db = new Conn("localhost","test_oo","root","");
/*$product = new Product;
$service = new ServiceProduct($db, $product);
print_r($service->listar(2));*/

//===================================
/*
$product = new Product;
$service = new ServiceProduct($db, $product);
print_r($service->delete(3));
 * /
 
//==============================
 
/*  $product = new Product;
    $service = new ServiceProduct($db, $product);
     $product->setId(1)
        ->setNome("PHP COURSE 123")
        ->setDescr("HTML COURSE OF SCHOOL OF NET");
    print_r($service->update());
 
*/
//==========================================
/*$product = new Product;
$service = new ServiceProduct($db, $product);
print_r($service->find(2));*/
//=============================================
$product = new Product;
$service = new ServiceProduct($db, $product);
$product->setNome("PHP COURSE 12345")
        ->setDescr("HTML COURSE OF SCHOOL OF NET 12345");

//print_r($service->salvar());