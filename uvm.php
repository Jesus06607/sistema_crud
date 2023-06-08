<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style2.css" rel="stylesheet">
    <title>Users CRUD</title>

    <style>
        /*Datos del Usuario*/
        
  .form-register {
    width: 600px;
    background: #24303c;
    padding: 10px;
    margin-right: 15px;
    margin-top: 5px;
    border-radius: 4px;
    font-family: 'Poppins';
    color: white;
    box-shadow: 7px 13px 37px #000;
  }

  .titulo{
    font-size: 20px;
    color:#ffffff;
    padding-bottom: 5px;
    font-family: 'Poppins';
    text-transform: uppercase;
  }

  .form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  
  .controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: white;
  }
  
  .form-register p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
  }
  
  .form-register a {
    color: white;
    text-decoration: none;
  }
  
  .form-register a:hover {
    color: white;
    text-decoration: underline;
  }
  
  .form-register .botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }
  
  .form-register-tarjet {
    width: 600px;
    background: #24303c;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    border-radius: 4px;
    font-family: 'calibri';
    color: white;
    box-shadow: 7px 13px 37px #000;
  }
  
  
  .form-register h4 {
    font-size: 22px;
    margin-bottom: 20px;
  }
  .form-register p {
    height: 40px;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
  }
  
  .form-register a {
    color: white;
    text-decoration: none;
  }
  
  .form-register a:hover {
    color: white;
    text-decoration: underline;
  }
  
  .form-register .botons {
    width: 100%;
    background: #1f53c5;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
  }

 
        * {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 38px;
  height: 600px; /* Should be removed. Only for demonstration */
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    padding:10px;
    display: flex;
    margin-left: 20px;
    background: #24303c;;
    box-shadow: 7px 13px 37px #000;
    border-radius: 4px;
  }
  
  

.container   .col .title{
    font-size: 20px;
    color:#ffffff;
    padding-bottom: 0px;
    text-transform: uppercase;
  }
  
  .container   .col .inputBox{
    margin:15px 0;
    font-size: 18px;
    color:#ffffff;
    
  }
  
  .container   .col .inputBox span{
    margin-bottom: 10px;
    display: block;
  }
  
  .container .col .inputBox input{
    
    border-radius: 4px;
    width:85%;
    border:1px solid #1f53c5;
    padding:10px 15px;
    font-size: 15px;
    text-transform: none;
    background: #24303c;
  }
  
  .container .col .inputBox input:focus{
    border:1px solid #000;
  }
  
  .container  .col .flex{
    display: flex;
    gap:15px;
  }
  
  .container   .col .flex .inputBox{
    margin-top: 10px;
  }
  
  .container  .col .inputBox img{
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
  }
  
  .container  .submit-btn{
    width: 100%;
    padding:12px;
    font-size: 17px;
    background: #27ae60;
    color:#fff;
    margin-top: 5px;
    cursor: pointer;
  }
  
  .container  .submit-btn:hover{
    background: #2ecc71;
  }


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
    </style>
</head>

<body >

<form action="insert_user.php" method="POST">
    <div class="row">
        <div class="column">
            <div class="form-register">
                <h4 class="titulo">Datos del usuario</h4>
                <span>Nombre:</span>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <span>Apellidos:</span>
                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
                <span>Telefono:</span>
                <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su numero telefonico">
                <span>Fecha de pago:</span>
                <input class="controls"type="date" name="fecha_pag" id="fecha_pag" placeholder="0000-00-00"> 
                <span>Monto total:</span>
                <input class="controls"type="text" id="mto_total" name="mto_total"placeholder>
                <span>Fecha del proximo pago:</span>
                <input class="controls"type="date" id="prox_pgo" name="prox_pgo"placeholder="Seleccione la fecha"> 
                <span>Abono a cuenta:</span>
                <input class="controls"type="text" name="abono" placeholder="abono">
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            </div>
        </div>

<!-------------------------------------------------------------- Tarjeta --------------------------------------------------------->

        <div class="column" >
            <div class="container">
                <div class="col">
                    <h3 class="title">Datos de la tarjeta</h3>
                    <div class="inputBox">
                        <span>Nombre:</span>
                        <input type="text" name="user_name" id="user_name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" name="correo" id="correo" placeholder="example@example.com">
                    </div>
                    <div class="inputBox">
                        <span>Direccion:</span>
                        <input type="text" name="direccion" id="direccion" placeholder="Ingresa tu Direccion">
                    </div>
                    <div class="inputBox">
                        <span>Ciudad:</span>
                        <input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su Ciudad">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Estado :</span>
                            <input type="text" name="estado" id="estado" placeholder="Ingrese su Estado">
                        </div>
                        <div class="inputBox">
                            <span>Codigo Postal:</span>
                            <input type="text" name="cp" id="cp" placeholder="00000">
                        </div>
                    </div>
                </div>
            
                    <div class="col">
                        <div class="inputBox">
                            <span>Tarjetas aceptadas:</span>
                            <img src="css/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Nombre en la tarjeta:</span>
                            <input type="text" name="name_cta" id="name_cta" placeholder="Ingrese nombre en la tarjeta">
                        </div>
                        <div class="inputBox">
                            <span>Numero de la tarjeta:</span>
                            <input type="number" name="num_cta" id="num_cta" placeholder="1111-2222-3333-4444">
                        </div>
                        <div class="inputBox">
                            <span>Mes de expiracion:</span>
                            <input type="text" name="mes_exp" id="mes_exp" placeholder="Enero">
                        </div>
                        <div class="flexd">
                            <div class="inputBox">
                                <span>Año de expiracion:</span>
                                <input type="text" name="año_exp" id="año_exp" placeholder="2022">
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" name="cvv" id="cvv" placeholder="1234">
                            </div>
                        </div>
                        <input type="submit" value="Proceder al pago" class="submit-btn">
                    </div>
                </div><!------------------------ container ------------------------------->
            </div><!------------------------ column ------------------------------->
        </div><!------------------------ row ------------------------------->
        
</form>


<div class="users-table">
        
        <table>
             <thead>
                
                <tr style="font-size: 25px; background-color: #1f7bc5ba">   
                    
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Fechas de pago</th>
                    <th>Total</th>
                    <th>Proximo pago</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Pago</th>

                </tr>
               
            </thead>
           
        <tbody>
                <?php while ($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['telefono'] ?></th>
                        <th><?= $row['fecha_pag'] ?></th>
                        <th><?= $row['mto_total'] ?></th>
                        <th><?= $row['prox_pgo'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a id="enviarCorreo" class="correo" >Notificar</a></th>
                        <td><a href="pagoautomatico.php?id=<?= $row['id'] ?>" class="users-table--pay">Realizar Pago</a></td>



                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
        $(document).ready(function() {
            $("#enviarCorreo").click(function() {
                var destinatario = prompt("Ingrese la dirección de correo electrónico:");

                if (destinatario) {
                    $.ajax({
                        url: "enviar_correo.php",
                        type: "POST",
                        data: { destinatario: destinatario },
                        success: function(response) {
                            alert(response);
                        },
                        error: function(xhr, status, error) {
                            alert("Error al enviar el correo: " + error);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
    <th>
    <button id="enviarCorreo" class="correo"> Enviar notificación de pago</button>



                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>




  

</body>

</html>