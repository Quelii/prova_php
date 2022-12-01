<?php
 include "conn.php";

 $id = 2;

 //preparar
 $stmt = $conn->prepare("DELETE FROM cadastro WHERE id=:id");

 //trocar
$stmt->bindParam(':id',$id);

 //executar

 $stmt->execute();

 echo "Cadastro Deletado Com Sucesso<br>";
    echo "<a href='index.php'>Clique Aqui Para Realizar Um Novo Cadastro";


?>