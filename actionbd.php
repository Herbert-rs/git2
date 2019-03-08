<?php
include_once "getsetbdp.php";
include_once "Conexaobd.php";

$get = new test($name,$sku,$price,$quantity,$categories,$description);

try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO Products(Name, SKU, Price, Quantity, Categories, Description) VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'sidiss',$get->getName(),$get->getSku(),$get->getPrice(), $get->getQuantity(),$get->getCategories(),$get->getDescription());
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";

}catch(Exception $e){
    echo "erro";
}




?>