<?php
    $servidor_var = "localhost";
    $usuario_var = "root";
    $password_var = "";
    $baseDatos_var= "basecurso";
    $tablaBase_var="tablaCurso";
    //conectando con el servidor
    $conect_var= mysqli_connect ($servidor_var,$usuario_var,$password_var,$baseDatos_var);
    //validamos si conexion fue exitosa o no
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else
    {
      echo "Conexion exitosa a servidor: ".$servidor_var." de la Base de Datos <br>";  
    }
  $selectFromTabla_var="SELECT * from tablacurso";
  $hacemosSelect_var=mysqli_query($conect_var,$selectFromTabla_var);
  if(!$hacemosSelect_var){echo "Oops!!...Failed consult SELECT Data to: ".$baseDatos_var." from Database";}
else{ echo "Select Consult Succesfully<hr>";}
$row= mysqli_fetch_array($hacemosSelect_var)
?>
<!-- Segunda Tabla que imprime todos los items -->
<hr> 
<table border="1" cellspacing="1" cellpadding="1">
      <tr>
         <th>&nbsp;id</th>
         <th>&nbsp;Nombre</th>
         <th>&nbsp;Dirección&nbsp;</th>
         <th>&nbsp;Telefono&nbsp;</th>
         <th>&nbsp;Email&nbsp;</th>
       </tr>
       <!-- inicia php -->
<?php      
   while($row = mysqli_fetch_array($hacemosSelect_var)) {
printf("<tr>
          <td> &nbsp;%s </td>
          <td> &nbsp;%s&nbsp; </td>
          <td> &nbsp;%s&nbsp; </td>
          <td> &nbsp;%s&nbsp; </td>
          <td> &nbsp;%s&nbsp; </td>
        </tr>", 
        $row["id_tablacurso"],$row["nombre"], $row["direccion"], $row["telefono"], $row["email"]);
   }
   mysqli_free_result($hacemosSelect_var);
?>
</table>
<br>
<a href="../BarraMenu.php"><button>Pagina principal</button></a><br><br>
<a href="../FormularioCRUD/FormularioCRUD.php"><button>Ingresar </button></a><br><br>
<!-- <a href="../ReadForm/ReadLastInsert.php"><button>Atras</button></a> -->