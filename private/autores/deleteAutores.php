<?php

include '../../config/db.php';
$id = $_GET['id'];

$sql = " DELETE FROM autores WHERE id=$id ";

if ($conn->query($sql) === true) {
    echo "Autor excluído com sucesso.
        <a href='readAutores.php'>Ver autor.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();