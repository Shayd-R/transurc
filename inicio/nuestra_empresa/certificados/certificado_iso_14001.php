<?php
define('BASE_URL', '../../../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>
<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/4.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>CERTIFICADO ISO 14001</h2>
      <ol>
        <li><a href="<?= BASE_URL ?>">Inicio</a></li>
        <li>Nuestra empresa</li>
        <li>Certificaciones</li>
        <li>Iso 14001</li>
      </ol>
    </div>
  </div>

  <section id="services" class="alt-services section-bg">
    <div class="contenedor-imagenes">
      <img src="<?php echo BASE_URL; ?>public/img/certificados/iso_14001.webp" class="imagen">
    </div>
  </section>
</main>
<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once ($headerPath);
?>