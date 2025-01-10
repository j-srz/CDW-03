<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce sobre nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="./build/img/nosotros.webp" type="image/webp" />
        <source srcset="./build/img/nosotros.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="./build/img/nosotros.jpg"
          alt="Sobre Nosotros" />
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus
        accusamus quisquam sequi veniam magnam ipsam accusantium error
        numquam temporibus blanditiis maiores, saepe adipisci. Asperiores,
        unde? Nulla nemo vel nobis maxime. Lorem ipsum, dolor sit amet
        consectetur adipisicing elit. Nulla iste, dolore vel dolorem at sint
        earum facere optio qui neque quisquam quis sapiente est repellendus
        placeat soluta, quod, labore minima.
      </p>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus,
        sint aliquam illum doloremque recusandae nihil delectus dolor
        quibusdam quae tempora quod. Doloremque, inventore. Odio, placeat
        doloribus accusantium voluptas voluptatem consequatur?
      </p>
    </div>
  </div>
</main>

<section class="contenedor seccion">
  <h1>Mas sobre nosostros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img
        src="build/img/icono1.svg"
        alt="Icono seguridad"
        loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Accusantium corrupti in modi iusto recusandae, maiores totam soluta
        consequatur eligendi nulla molestias quasi suscipit amet? Asperiores
        adipisci nemo nam voluptatibus vel.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Accusantium corrupti in modi iusto recusandae, maiores totam soluta
        consequatur eligendi nulla molestias quasi suscipit amet? Asperiores
        adipisci nemo nam voluptatibus vel.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Accusantium corrupti in modi iusto recusandae, maiores totam soluta
        consequatur eligendi nulla molestias quasi suscipit amet? Asperiores
        adipisci nemo nam voluptatibus vel.
      </p>
    </div>
  </div>
</section>


<?php

incluirTemplate('footer');
?>