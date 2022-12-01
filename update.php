<?php

 include "conn.php";

 $id = 2;
 $nameProduct = "Sabão em Pó";

 //prepare
$stmt = $conn->prepare("UPDATE cadastro SET nameProduct =:nameProduct WHERE id=:id");

 //trocar

$stmt->bindParam(':id',$id);
$stmt->bindParam('nameProduct',$nameProduct);
 //executar

$stmt ->execute();

echo "Cadastro Alterado Com Sucesso<br>";
echo "<a href=index.php> Clique Aqui Para Cadastrar Um Novo Produto";



?>