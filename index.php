<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova PHP</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="nameProduct">Digite O Nome Do Produto</label>
            <input type="text" name="nameProduct" required>
        </div>
        <div>
            <label for="description">Digite a Descrição do Produto</label>
            <input type="text" name="description" >
        </div>
        <div>
            <label for="price">Informe O Preço do Produto</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <input type="submit" value="CADASTRO" >
        </div>
    </form>
</body>
</html>