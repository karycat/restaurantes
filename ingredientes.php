<?php
$servidor = "sql312.infinityfree.com";
$usuario = "si0_36742046";
$clave = "EewHMHvqxzh";
$baseDeDatos = "if0_36742046_restaurante";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>INGREDIENTES</title>
    <style>
        body {
            background-color: #004D40;
            color: #FFFFFF;
            font-family: Georgia, "Times New Roman", Times, serif;
            text-align: center;
        }
        .Estilo1 {
            font-size: 50px;
            font-weight: bold;
            margin-top: 20px;
        }
        .Estilo2 {
            font-size: x-large;
            margin-top: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        input[type="text"] {
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
			}
        input[type="date"] {
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"], input[type="reset"] {
            width: 150px;
            padding: 10px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00796B;
            color: white;
            font-size: medium;
        }
    </style>
</head>
<body>
    <div class="Estilo1">INGREDIENTES</div>

    <form action="#" name="restaurante" method="POST">
        <p>&nbsp;</p>
        <p class="Estilo2">NOMBRE:</p>
      <p>
          <input type="text" name="Nombre"  required>
      </p>
      <p class="Estilo2">FECHA DE CADUCIDAD:</p>
      <p>
        <input type="date" name="Fecha_de_caducidad" required>
      </p>
      <p class="Estilo2">CANTIDAD:</p>
        <p>
          <input type="text" name="Cantidad"  required>
        </p>
		<p class="Estilo2">CANTIDAD EN EL ALMACEN:</p>
        <p>
          <input type="text" name="Cantidad_en_el_almacen"  required>
        </p>
        <p>
          <input type="submit" name="guardar" value="Guardar">
          <input type="reset" value="Restablecer">
        </p>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        $Nombre = $_POST['Nombre'];
        $Fecha_de_caducidad = $_POST['Fecha_de_caducidad'];
        $Cantidad = $_POST['Cantidad'];
		$Cantidad_en_el_almacen = $_POST['Cantidad_en_el_almacen'];
		

        $insertarDatos = "INSERT INTO ingredientes VALUES('$Nombre', '$Fecha_de_caducidad','$Cantidad', '$Cantidad_en_el_almacen')";
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if ($ejecutarInsertar) {
            echo "<p class='Estilo2'>Datos guardados correctamente.</p>";
        } else {
            echo "<p class='Estilo2'>Error al guardar los datos.</p>";
        }
    }
    ?>
</body>
</html>