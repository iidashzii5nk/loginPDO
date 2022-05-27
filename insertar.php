<?php
include('conexionPDO.php');


$name = $_POST['name']; //trim remueve los espacios del principio y del final
$email = $_POST['email'];
$password = $_POST['password'];
$fechareg = date("d/m/y"); //Date automaticamente me toma la fecha actual y y la registra

$consulta = "INSERT INTO datos(nombre, email, contraseña, fecha_reg) VALUES (:name, :email, :password, :fecha)";


$resultado = $con->prepare($consulta);

$resultado->execute(array(":name" => $name, ":email" => $email, ":password" => $password, ":fecha" => $fechareg));

echo "Registro insertado";

$resultado->closeCursor();
