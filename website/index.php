<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>DESPLIEGUE DE APLICACIONES</h1>
    	<input type="text" name="name" placeholder="Nombre:">
    	<input type="email" name="email" placeholder="Email:">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>