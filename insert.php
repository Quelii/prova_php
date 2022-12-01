<?php
include "conn.php";

$nameProduct = $_POST['nameProduct'];
$description = $_POST['description'];
$price = $_POST['price'];

//preparar
 $stmt = $conn->prepare("INSERT INTO cadastro (nameProduct, description, price)VALUE(:nameProduct, :description, :price)");


//trocar
$stmt->bindParam(':nameProduct',$nameProduct);
$stmt->bindParam(':description',$description);
$stmt->bindParam(':price',$price);

//executar
$stmt->execute();

echo "Cadastro Feito Com Sucesso <br>";
echo "<a href='index.php'>Clique Aqui Para Cadastrar Um Novo Produto";


?>