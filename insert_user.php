<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$fecha_pag = $_POST['fecha_pag'];
$mto_total = $_POST['mto_total'];
$prox_pgo = $_POST['prox_pgo'];
$abono = $_POST['abono'];
$user_name = $_POST['user_name'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$name_cta = $_POST['name_cta'];
$num_cta = $_POST['num_cta'];
$mes_exp = $_POST['mes_exp'];
$año_exp = $_POST['año_exp'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO clientes VALUES('$id','$nombre','$apellido','$telefono','$fecha_pag','$mto_total','$prox_pgo','$abono','$user_name','$correo','$direccion','$ciudad','$estado','$cp','$name_cta','$num_cta','$mes_exp','$año_exp','$cvv')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>