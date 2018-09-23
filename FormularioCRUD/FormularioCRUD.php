<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar elemento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="FormularioCRUDStyle.css" />
    <script src="main.js"></script>
</head>
<body>
    <form id="Formulario" action="../ReadForm/ReadLastInsert.php" method="post" >
    <!-- <form id="Formulario" action="" method="post" > -->
        <div class="DivFormulario" >
            <table>
                <tr>
                    <td><label for="nombre_id">Nombre</label></td><td><input id="nombre_id" type="text" name="nombre_name" placeholder="Nombres Apellidos" required></td>
                </tr>
                <tr>
                    <td><label for="direccion_id">Dirección</label></td><td><input id="direccion_id" type="text" name="Direccion_name" placeholder="Direccion" required></td>
                </tr>
                <tr>
                    <td><label for="telefono_id">Teléfono</label></td><td><input id="telefono_id"  type="number" name="Telefono_name" placeholder="555 555555" required></td>
                </tr>
                <tr>
                    <td> <label for="email_id">E-mail</label></td><td><input id="email_id" type="email" name="Email_name" placeholder="user@domain.com" required></td>
                </tr>
            </table>                       
            <button type="submit" >ENVIAR</button><br><br>            
        </div>
        <a class="aClass" href="../BarraMenu.php">Ir Pagina Principal</a>
    </form>
    
<!-- BOTONES REGRESAR -->
<hr>
</body>
</html>