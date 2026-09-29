<?php

include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fast Order</title>
  <link rel="stylesheet" href="stylesindexcrud.css" />
</head>

<body>
  <header>
    <h1>Fast Order</h1>
  </header>
  <div class="contain">
    <h2>¡Ordena tu comida rápida favorita!</h2>
    <form action="insert.php" method="POST">
      <input type="text" name="name" placeholder="Nombre" /><br>
      <input type="text" name="lastname" placeholder="Apellido" /><br>
      <input type="text" name="username" placeholder="Usuario" /><br>
      <input type="password" name="password" placeholder="Contraseña" /><br>
      <input type="email" name="email" placeholder="Email" /><br>
      <input type="submit" value="Iniciar Sesión" />
    </form>
  </div>
</body>

</html>