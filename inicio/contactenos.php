<?php
$BASE_URL = filter_input(INPUT_SERVER, 'BASE_URL', FILTER_SANITIZE_URL);
if ($BASE_URL !== false && $BASE_URL !== null) {
  define('BASE_URL', $BASE_URL);
} else {
  define('BASE_URL', '../');
}
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>

<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/2.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Contactenos</h2>
      <ol>
        <li><a href="<?= BASE_URL ?>">Inicio</a></li>
        <li>Contactenos</li>
      </ol>

    </div>
  </div>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-geo-alt"></i>
            <h3>Nuestra dirección</h3>
            <p>Cra. 9 Casa 7 Barrio La Reserva, Mocoa-Putumayo </p>
            <p> &nbsp;</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Correo</h3>
            <p>gerencia@transur.co</p>
            <br>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Llámanos</h3>
            <p>+57 323 3133 406</p>
            <p> &nbsp;</p>
          </div>
        </div>

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-12 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1713.8733638106369!2d-76.6464229810187!3d1.1924649896547408!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTEnMzMuMSJOIDc2wrAzOCc0NS4yIlc!5e0!3m2!1ses-419!2sco!4v1708030294742!5m2!1ses-419!2sco"
            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

        </div>

      </div>

    </div>
  </section>
</main>
<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once ($headerPath);
?>