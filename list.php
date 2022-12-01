<?php

include"conn.php";

//prepare
$stmt = $conn->prepare("SELECT *FROM cadastro ORDER BY id");

//exexute
$stmt->execute();

//list

$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
       echo "Os Produtos Cadastrados:".$row['nameProduct']."<br>";
    }


?>