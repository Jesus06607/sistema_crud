<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM clientes WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
    <script src="index.js" defer></script>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>">
                <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
                <input type="date" name="fecha_pag" placeholder="Fecha de pago" value="<?= $row['fecha_pag']?>">
                <input type="text" name="mto_total" placeholder="Monto total" value="<?= $row['mto_total']?>">
                <input type="date" name="prox_pgo" placeholder="proximo pago" value="<?= $row['prox_pgo']?>">
                <input type="text" name="abono" placeholder="Abono" value="<?= $row['abono']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>