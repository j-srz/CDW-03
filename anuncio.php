<?php
require 'includes/funciones.php';

$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);

require __DIR__ . '/includes/config/database.php';
$db = conectarDB();

if ($id) {
  $query = "SELECT * FROM propiedades WHERE id = {$id}";
  $resultado = mysqli_query($db, $query);
  $propiedad = mysqli_fetch_assoc($resultado);

  if ($resultado->num_rows === 0) {
    header('Location: /');
  }

} else {
  header('Location: /');
}

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $propiedad['titulo'] ?></h1>

    <img
      loading="lazy"
      src="/imagenes/<?php echo $propiedad['imagen'] ?>"
      alt="Imagen de la propiedad" />

  <div class="resumen-propiedad">
    <p class="precio"><?php echo $propiedad['precio'] ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img
          class="icono"
          src="build/img/icono_wc.svg"
          alt="icono wc"
          loading="lazy" />
        <p><?php echo $propiedad['wc'] ?></p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_estacionamiento.svg"
          alt="icono estacionamiento"
          loading="lazy" />
        <p><?php echo $propiedad['estacionamiento'] ?></p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_dormitorio.svg"
          alt="icono habitaciones"
          loading="lazy" />
        <p><?php echo $propiedad['habitaciones'] ?></p>
      </li>
    </ul>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ipsam
      eligendi, doloribus reiciendis similique quae, placeat tempora numquam
      corrupti molestiae expedita suscipit accusamus assumenda commodi quam
      impedit omnis necessitatibus natus. Lorem ipsum dolor sit amet
      consectetur adipisicing elit. Nemo tempore omnis reiciendis,
      repudiandae voluptate exercitationem molestiae dolor nam hic vel
      accusamus atque mollitia fuga vitae sapiente architecto, non est eius!
    </p>

    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia
      perferendis itaque nemo dolor obcaecati ullam, suscipit similique,
      labore expedita praesentium tenetur ipsum iste aperiam, explicabo
      incidunt porro minus sint optio!
    </p>
  </div>
</main>

<?php

incluirTemplate('footer');
?>