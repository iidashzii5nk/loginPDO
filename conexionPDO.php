<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try{
$con = new PDO ('mysql:host=localhost; bdname=registro', 'root', '');
echo 'Conectado';
}catch(Exception $e){
die('Error' . $e->getMessage());
}
?>
</body>
</html>



