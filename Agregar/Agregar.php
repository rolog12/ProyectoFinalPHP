<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar elemento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="AgregarStyle.css" />
    <script src="main.js"></script>
</head>
<body>
    <form id="Formulario" action="../Conectar/ConectarBD.php" method="post" >
        <div class="DivFormulario" >
            <table>
                <tr>
                    <td>Nombre</td><td><input type="text" name="nombre_var" required></td>
                </tr>
                <tr>
                    <td>Dirección</td><td><input type="text" name="Direccion_var" required></td>
                </tr>
                <tr>
                    <td>Teléfono</td><td><input type="text" name="Telefono_var" required></td>
                </tr>
                <tr>
                    <td>E-mail</td><td><input type="text" name="Email_var" required></td>
                </tr>
            </table>                    
            <button type="submit" >ENVIAR</button><br>
        </div>
        <a href="../formularioregistros.php">Pagina Principal</a>
    </form>
</body>
</html>