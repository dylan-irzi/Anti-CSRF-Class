<?php
include 'csrfclass.php';

$request = new RequestProtection;
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>csrf protect</title>
<meta charset="utf-8" />
<meta name="description" content="Anti-CSRF Protect">
<meta name="keywords" content="CSRF,Dylan Irzi,Security,PHP">
<meta name="author" content="Dylan Irzi">
</head>
	<body>
<h2>Votacion</h2>
<ul>
	<li>Rating</li>
	<li><a href="?rate=1&token=<?php echo $request->hash ?>">1</a></li>
	<li><a href="?rate=2&token=<?php echo $request->hash ?>">2</a></li>
	<li><a href="?rate=3&token=<?php echo $request->hash ?>">3</a></li>
	<li><a href="?rate=4&token=<?php echo $request->hash ?>">4</a></li>
	<li><a href="?rate=5&token=<?php echo $request->hash ?>">5</a></li>
</ul>
<?php if ( isset($_GET['rate']) && $request->is_valid('token')) : ?>
	<p><h3>Gracias por Votar! Su Calificacion es <?php echo htmlentities($_GET['rate']); ?>
<?php endif ?>
	</body>
</html>
