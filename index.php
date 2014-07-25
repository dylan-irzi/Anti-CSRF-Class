<?php
include 'csrfclass.php';

$request = new RequestProtection;
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>CSRF Protect</title>
<meta charset="utf-8" />
<meta name="description" content="Anti-CSRF Protect">
<meta name="keywords" content="CSRF,Dylan Irzi,Security,PHP">
<meta name="author" content="Dylan Irzi">


</head>
<body>
	<?php if(isset($_POST['name']) && isset($_POST['comment']) && $request->is_valid() ) : ?>
	<p>Comentario añadido!<p>
	<?php endif ?>

	<h2>Deja tu comentario </h2>
	<form method="POST">
		<input type="hidden" name="csrf_token" value="<?php echo $request->hash ?>" />
		Nombre: <input name="name" type="text" value="Dylan Irzi" />
		<br>
	 	Comentarios: <br><textarea name="comment">Este es Mi comentario! </textarea>
	 	<br>
	 	<input type="submit" value="Insertar registro">
</body>
</html>
