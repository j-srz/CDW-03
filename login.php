<?php

require 'includes/config/database.php';

$db = conectarDB();

$errs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (!$email) {
		$errs[] = 'El email es obligatorio o no es valido';
	}
	if (!$password) {
		$errs[] = ' La contraseña es obligatoria';
	}
	if (empty($errs)) {

		$query = "SELECT * FROM usuarios WHERE email = '{$email}'";


		$resultado = mysqli_query($db, $query);

		if( $resultado->num_rows) {

			$usuario = mysqli_fetch_assoc($resultado);


			$auth = password_verify($password, $usuario['password']);

			if($auth) {
				session_start();

				$_SESSION['usuario'] = $usuario['email'];
				$_SESSION['login'] = true;

				header('location: /admin');


			} else {
				$errs[] = 'El password es incorrecto';
			}



		} else {
			$errs[] = 'El usuario no existe';
		}





	}
	


}





require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
	<h1>Iniciar sesión</h1>

	<?php foreach($errs as $err) : ?>
		<div class="alerta error">
			<?php echo $err; ?>
		</div>
	<?php endforeach ?>


	<form method="POST" class="formulario">
		<fieldset>
			<legend>Email y password</legend>

			<label for="email">E-mail</label>
			<input
				type="email"
				id="email"
				name="email"
				placeholder="Tu E-mail" />

			<label for="password">Password</label>
			<input
				type="password"
				id="password"
				name="password"
				placeholder="Tu password" />


		</fieldset>
		<input type="submit" value="Iniciar sesion" class="boton boton-verde">
	</form>

</main>


<?php

incluirTemplate('footer');
?>