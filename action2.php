<?php
include_once "getsetbdc.php";
include_once "Conexaobd.php";

$get = new test2 ($code,$name);

try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO Category(Cod_id, Name) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt,'ss',$get->getCode(),$get->getName());
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
}catch(Exception $e){
    echo "erro";


}

?>




