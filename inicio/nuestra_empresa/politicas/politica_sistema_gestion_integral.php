<?php
define('BASE_URL', '../../../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once($headerPath);
?>
<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/3.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <center>
        <h2>POLITICA SISTEMA GESTION INTEGRAL</h2>
      </center>
      <ol>
        <li><a href="<?= BASE_URL ?>">Inicio</a></li>
        <li>Politicas</li>
        <li>Politica sistema gestion integral</li>
      </ol>

    </div>
  </div>

  <section id="services" class="alt-services section-bg">
    <div class="contenedor-imagenes">
      <img src="<?php echo BASE_URL; ?>public/img/politicas/17.webp" class="imagen">
    </div>
  </section>
</main>
<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once($headerPath);
?>