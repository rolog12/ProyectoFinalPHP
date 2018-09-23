<?php
    include_once ("../Conectar/ConectarBD.php")
?>
<form action="">
  <table border="1">
    <tr>
      <th colspan='4'>BASE DE DATOS BASECURSO</th>
    </tr>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Teléfono</th>
      <th>Email</th>
    </tr>
    <tr>
      <td><?php echo $row["id_tablacurso"]?></td>  
      <td><?php echo $nombre_var?></td>
      <td><?php echo $direccion_var?></td>
      <td><?php echo $Telefono_var?></td>
      <td><?php echo $Email_var?></td>
    </tr>
  </table>
</form>

<hr>
<br>
<!-- BOTONES REGRESAR -->
<a href="../BarraMenu.php"><button>Pagina principal</button></a><br><br>
<a href="../FormularioCRUD/FormularioCRUD.php"><button>Menu Formulario</button></a><br><br>
<a href="../ReadForm/ReadAllDataBase.php"><button>Ver Base Datos Completa</button></a>