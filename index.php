<html>
	<head>
	</head>
	<body>
		Formulario
		<form action="page.php" method="POST">
			<label>Nombre</label>
			<input type="text" name="nombre">
			<label>Edad</label>
			<input type="te" name="edad">
			<input type="submit" name="" value="Enviar">
		</form>
		<hr />
		<?php include('partialView.html') ?>
	</body>
</html>
