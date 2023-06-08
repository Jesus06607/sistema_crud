<?php
// Obtener la última fecha de pago desde la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abundis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT fecha_pag, prox_pgo FROM clientes ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fecha_pago = $row["fecha_pag"];
    $prox_pago = $row["prox_pgo"];
} else {
    $fecha_pago = "No hay pagos registrados";
    $prox_pago = "";
}

$conn->close();

// Actualizar la fecha de pago y la fecha próxima de pago en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nueva_fecha_pago = date("Y-m-d"); // Obtener la fecha actual

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    $sql = "UPDATE clientes SET fecha_pag = '$prox_pago' ORDER BY id DESC LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        $fecha_pago = $prox_pago;

        $nueva_fecha_proxima_pago = date("Y-m-d", strtotime("+30 days", strtotime($prox_pago)));

        $sql = "UPDATE clientes SET prox_pgo = '$nueva_fecha_proxima_pago' ORDER BY id DESC LIMIT 1";

        if ($conn->query($sql) !== TRUE) {
            echo "Error al actualizar la fecha próxima de pago: " . $conn->error;
        } else {
            $prox_pago = $nueva_fecha_proxima_pago;
        }
    } else {
        echo "Error al actualizar la fecha de pago: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagos Mensuales</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        html {
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
        }
        
        h1, h2 {
            margin-bottom: 20px;
        }
        
        form {
            margin-bottom: 20px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        a {
            display: block;
            margin-top: 20px;
            color: #666;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Pagos Mensuales</h1>

    <h2>Fecha de último pago: <?php echo $fecha_pago; ?></h2>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" value="Realizar Pago">
    </form>

    <a href="uvm.php">Regresar a la página principal</a>
</body>
</html>

