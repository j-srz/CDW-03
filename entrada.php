<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Guia para la decoracion de tu hogar</h1>

  <picture>
    <source srcset="./build/img/destacada.webp" type="image/webp" />
    <source srcset="./build/img/destacada.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="./build/img/destacada.jpg"
      alt="Imagen de la propiedad" />
  </picture>

  <p class="informacion-meta">
    Escrito el: <span>20/10/2023</span> por: <span>Admin</span>
  </p>

  <div class="resumen-propiedad">
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