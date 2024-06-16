<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "restaurante";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CATEGORIA</title>
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
        input[type="blob"] {
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
    <div class="Estilo1">CATEGORIA</div>

    <form action="#" name="restaurante" method="POST">
        <p>&nbsp;</p>
        <p class="Estilo2">GRUPO:</p>
      <p>
          <input type="text" name="Grupo"  required>
      </p>
      <p class="Estilo2">DESCRIPCION:</p>
      <p>
        <input type="text" name="Descripcion" required>
      </p>
      <p class="Estilo2">ENCARGADO:</p>
        <p>
          <input type="text" name="Encargado"  required>
        </p>
		

          <input type="submit" name="guardar" value="Guardar">
          <input type="reset" value="Restablecer">
        </p>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        $Grupo = $_POST['Grupo'];
        $Descripcion = $_POST['Descripcion'];
        $Encargado = $_POST['Encargado'];
		

        $insertarDatos = "INSERT INTO categoria VALUES('$Grupo','$Descripcion','$Encargado')";
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