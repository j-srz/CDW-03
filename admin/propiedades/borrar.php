<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();

if(!$auth) {
    header('location: /');
}
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Borrar</h1>
</main>


<?php

incluirTemplate('footer');
?>