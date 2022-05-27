<?php
session_start();//Iniciamos la sesión

include('conexionPDO.php');/*Se incluye el archivo de la conexion para poder hacer nuestras consultas*/
$emausu=$_POST['emausu'];//Creamos la variable con el mismo nombre que se llamo en el formulario
$pasusu=$_POST['pasusu'];
$_SESSION['emausu'] = $emausu;//usamos la variable _SESSION que es igual a el dato que queramos mostrar



$sql="SELECT * FROM datos WHERE email= :emausu and contraseña= :pasusu";

$resultado = $con->prepare($sql);

$resultado->execute(array(":emausu" => $emausu, "pasusu" => $pasusu));

$usuario = $resultado->fetch(PDO::FETCH_ASSOC);

if ($usuario) {
 

   header("location:sesion.php");
  
}
else{
	echo "Error en la autenticacion el correo y la contraseña no son iguales";
}
