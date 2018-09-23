<?php
// asignamos variables para conexion con servidor
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
$nombre_var     = $_POST['nombre_name'];
$direccion_var  =$_POST['Direccion_name'];
$Telefono_var   =$_POST['Telefono_name'];
$Email_var      =$_POST['Email_name'];
//establecemos la insercion de datos
//$sql_var="INSERT INTO $tablaBase_var (nombre) VALUES('ppp')";
$sql_var="INSERT INTO tablacurso (nombre,direccion,telefono,email) VALUES('$nombre_var','$direccion_var','$Telefono_var','$Email_var')";
//  ejecutamos la insercion de los datos con mysql_query
mysqli_query($conect_var,$sql_var);
$selectFromTabla_var="SELECT * from tablacurso";
$hacemosSelect_var=mysqli_query($conect_var,$selectFromTabla_var);// or die("Oops!!...Failed to insert Data to: ".$tablaBase_var." from Database");
// validacion consulta SELECT
if(!$hacemosSelect_var)
{
  echo "Oops!!...Failed consult SELECT Data to: ".$baseDatos_var." from Database";
}
else
{
  echo "Select Consult Succesfully<hr>";
}
$row= mysqli_fetch_array($hacemosSelect_var)
?>
