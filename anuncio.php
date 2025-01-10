<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Casa en venta frente al bosque</h1>

  <picture>
    <source srcset="./build/img/destacada.webp" type="image/webp" />
    <source srcset="./build/img/destacada.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="./build/img/destacada.jpg"
      alt="Imagen de la propiedad" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img
          class="icono"
          src="build/img/icono_wc.svg"
          alt="icono wc"
          loading="lazy" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_estacionamiento.svg"
          alt="icono estacionamiento"
          loading="lazy" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_dormitorio.svg"
          alt="icono habitaciones"
          loading="lazy" />
        <p>4</p>
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