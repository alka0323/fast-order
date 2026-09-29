<?php
include("connection.php");

$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="edit.css">
</head>

<body>
    <div class="formulario">
        <form action="edit.php" method="POST">
        <h1>EDITAR</h1>
        <input type="hidden" name="id" value="<?= $row ['id'] ?>">
        <input type="text" name="name" placeholder="Nombre" value="<?= $row ['name'] ?>"/>
        <input type="text" name="lastname" placeholder="Apellido" value="<?= $row ['lastname'] ?>"/>
        <input type="text" name="username" placeholder="User" value="<?= $row ['username'] ?>"/>
        <input type="text" name="password" placeholder="Contraseña" value="<?= $row ['password'] ?>"/>
        <input type="email" name="email" placeholder="Email" value="<?= $row ['email'] ?>"/>
        <input type="submit" value="Actualizar" />
        </form>
    </div>

</body>

</html>