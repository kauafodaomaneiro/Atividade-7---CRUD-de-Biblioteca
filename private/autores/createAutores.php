<?php

include '../../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano_nascimento = $_POST['ano_nascimento'];

    $sql = " INSERT INTO autores (nome,nacionalidade,ano_nascimento) VALUE ('$nome','$nacionalidade','$ano_nascimento')";

    if ($conn->query($sql) === true) {
        echo "Novo autor registrado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar autor</title>
</head>

<body>

    <form method="POST" action="createAutores.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" name="nacionalidade" required>

        <label for="ano_nascimento">Ano_nascimento:</label>
        <input type="date" name="ano_nascimento" required>

        <input type="submit" value="Adicionar">

    </form>


</body>

</html>