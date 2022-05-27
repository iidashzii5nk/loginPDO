

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="validar.php" method="POST">

<h3>¿YA ESTÁ REGISTRADO?</h3>

<div>
<label>Correo electrónico</label><br>
<input type="text" name="emausu" placeholder="Correo" required autofocus>
</div>

<div>
    <label>Contraseña</label><br>
<input type="password" name="pasusu" placeholder="Contraseña" required autofocus>
</div>
<p>
    <a href="olvidocontra.html">¿Olvidó su contraseña</a>
</p>


<div>
<button type="submit">
<span><i class="lok fas fa-lock"></i>INICIAR SESIÓN
</span>
</button>
</div>
</form>
</body>
</html>