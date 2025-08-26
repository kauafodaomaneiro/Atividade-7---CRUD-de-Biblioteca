<?php

include '../../config/db.php';

$sql = "SELECT * FROM autores";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Nacionalidade </th>
            <th> Ano Nascimento </th>
            <th> Editar </th>
            <th> Deletar </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome']} </td>
                <td> {$row['nacionalidade']} </td>
                <td> {$row['ano_nascimento']} </td>
                <td> <a href='updateAutores.php?id={$row['id']}'>Editar<a> </td>
                <td> <a href='deleteAutores.php?id={$row['id']}'>Excluir<a> </td>
                
                
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum autor registrado.";
}

$conn -> close();

echo "<a href='createAutores.php'>Inserir novo registro</a>";