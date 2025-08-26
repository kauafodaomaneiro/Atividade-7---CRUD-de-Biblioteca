<?php

include '../../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano_pubicacao = $_POST['ano_pubicacao'];
    $id_autor = $_POST['id_autor'];

    $sql = " INSERT INTO livros (titulo,genero,ano_publicacao,id_autor) VALUE ('$titulo','$genero','$ano_publicacao','$id_autor')";

    if ($conn->query($sql) === true) {
        echo "Novo livro registrado com sucesso.";
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
    <title>Create</title>
</head>

<body>

    <form method="POST" action="createLivros.php">

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="genero">Genero:</label>
        <input type="text" name="genero" required>

        <label for="ano_publicacao">Ano_publicacao:</label>
        <input type="date" name="ano_publicacao" required>

        <label for="autor">Autor:</label>
        <select name="autor" required>
            <option value="">Selecione</option>
            <?php while ($row = $autores->fetch_assoc()): ?>
                <option value="<?= $row['id'] ?>"><?= ($row['nome']) ?></option>
            <?php endwhile; ?>
        </select>


        <input type="submit" value="Adicionar">

    </form>

    <a href="readLivros.php">Ver registros.</a>

</body>

</html>