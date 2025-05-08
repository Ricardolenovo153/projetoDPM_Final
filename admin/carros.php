<?php include '../php/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h2>Car List</h2>
<a class="botao" href="createcarro.php"><i class="fa-solid fa-plus"></i> Add New Car</a>
<table>
    <tr><th>ID</th><th>marca</th><th>modelo</th><th>subModelo</th><th>nPortas</th><th>potencia</th><th>transmissao</th><th>kilometros</th><th>combustivel</th><th>preco</th><th>imagem</th><th>ano</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM carro");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['marca'] ?></td>
        <td><?= $row['modelo'] ?></td>
        <td><?= $row['subModelo'] ?></td>
        <td><?= $row['nPortas'] ?></td>
        <td><?= $row['potencia'] ?></td>
        <td><?= $row['transmissao'] ?></td>
        <td><?= $row['kilometros'] ?></td>
        <td><?= $row['combustivel'] ?></td>
        <td><?= $row['preco'] ?></td>
        <td><?= $row['imagem'] ?></td>
        <td><?= $row['ano'] ?></td>
        <td>
            <a href="editcarro.php?id=<?= $row['id'] ?>">✏️</a> |
            <a href="deletecarro.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">🗑️</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>