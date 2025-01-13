<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if(!$auth) {
    header('location: /');
}
// db
require '../../includes/config/database.php';
$db = conectarDB();

$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';
$creado = date('Y/m/d');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //echo "<pre>";
  //var_dump($_FILES);
  //echo "</pre>";



   

  $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
  $precio = mysqli_real_escape_string( $db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
  $wc = mysqli_real_escape_string( $db, $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
  $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedorId']);

  $imagen = $_FILES['imagen'];




  if (!$titulo) {
    $errores[] = "Debes añadir un título";
  }
  if (!$precio) {
    $errores[] = "Debes añadir un precio";
  }
  if (strlen($descripcion) < 50) {
    $errores[] = "Debes añadir una descripción de al menos 50 caracteres";
  }
  if (!$habitaciones) {
    $errores[] = "Debes añadir el número de habitaciones";
  }
  if (!$wc) {
    $errores[] = "Debes añadir el número de baños";
  }
  if (!$estacionamiento) {
    $errores[] = "Debes añadir el número de estacionamientos";
  }
  if (!$vendedorId) {
    $errores[] = "Debes elegir un vendedor";
  }

  if(!$imagen['name'] || $imagen['error']) {
    $errores[] = "Debes añadir una imagen";
  }

  $medida = 1000 * 300;

  if($imagen['size'] > $medida) {
    $errores[] = "La imagen es muy pesada";
  }

  // echo "<pre>";
  // var_dump($errores);
  // echo "</pre>";

  if (empty($errores)) {

    // Subida de archivos
    $carpetaImagenes = '../../imagenes/';
    if(!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
    }

    // Generar un nombre único
    $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";


    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes  . $nombreImagen);





    $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id)
    VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      header('Location: /admin?resultado=1');
    } 
  }
}

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>


  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
    <fieldset>
      <legend>Información General</legend>

      <label for="titulo">Título:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
    </fieldset>

    <fieldset>
      <legend>Información Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 2" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 2" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedorId">
        <option value="">-- Seleccione --</option>

        <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
          <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''?> value="<?php echo $vendedor["id"]?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"] ?></option>

        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>

</main>


<?php

incluirTemplate('footer');
?>