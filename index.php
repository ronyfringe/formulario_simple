<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registrar usuario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <form method="post">
        <h1>¡Suscribete!</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
    <?php
	include("registrar.php");
 	?>


</body>

</html>


