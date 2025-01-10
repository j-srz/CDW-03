<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Contacto</h1>

  <picture>
    <source srcset="./build/img/destacada3.webp" type="image/webp" />
    <source srcset="./build/img/destacada3.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="./build/img/destacada3.jpg"
      alt="Imagen Contacto" />
  </picture>
  <h2>Llene el formulario de contacto</h2>

  <form class="formulario">
    <fieldset>
      <legend>Información Personal</legend>

      <label for="nombre">Nombre</label>
      <input
        type="text"
        id="nombre"
        name="nombre"
        placeholder="Tu Nombre"
        required />

      <label for="email">E-mail</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Tu E-mail"
        required />

      <label for="telefono">Teléfono</label>
      <input
        type="tel"
        id="telefono"
        name="telefono"
        placeholder="Tu Teléfono"
        required />

      <label for="mensaje">Mensaje</label>
      <textarea
        id="mensaje"
        name="mensaje"
        placeholder="Tu Mensaje"
        required></textarea>
    </fieldset>

    <fieldset>
      <legend>Información sobre la Propiedad</legend>

      <label for="opciones">Vende o Compra</label>
      <select id="opciones" name="opciones" required>
        <option value="" disabled selected>-- Seleccione --</option>
        <option value="compra">Compra</option>
        <option value="vende">Vende</option>
      </select>

      <label for="presupuesto">Precio o Presupuesto</label>
      <input
        type="number"
        id="presupuesto"
        name="presupuesto"
        placeholder="Tu Precio o Presupuesto"
        required />
    </fieldset>

    <fieldset>
      <legend>Contacto</legend>

      <p>Cómo desea ser contactado:</p>
      <div class="forma-contacto">
        <label for="contactar-telefono">Teléfono</label>
        <input
          type="radio"
          id="contactar-telefono"
          name="contacto"
          value="telefono"
          required />

        <label for="contactar-email">E-mail</label>
        <input
          type="radio"
          id="contactar-email"
          name="contacto"
          value="email"
          required />
      </div>

      <p>
        Si eligió teléfono, elija la fecha y la hora para ser contactado
      </p>

      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" name="fecha" />

      <label for="hora">Hora</label>
      <input type="time" id="hora" name="hora" min="09:00" max="18:00" />
    </fieldset>

    <input type="submit" value="Enviar" class="boton-verde" />
  </form>
</main>


<?php

incluirTemplate('footer');
?>