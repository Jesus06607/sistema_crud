<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$fecha_pag = $_POST['fecha_pag'];
$mto_total = $_POST['mto_total'];
$prox_pgo = $_POST['prox_pgo'];
$abono = $_POST['abono'];



$sql="UPDATE clientes SET nombre='$nombre', apellido='$apellido', telefono='$telefono', fecha_pag='$fecha_pag', mto_total='$mto_total'-'$abono', prox_pgo='$prox_pgo', abono='$abono' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: uvm.php");
}else{

}

                                                                                
?>

