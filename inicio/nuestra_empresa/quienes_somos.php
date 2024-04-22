<?php
define('BASE_URL', '../../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>
<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/4.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>QUIENES SOMOS</h2>
      <ol>
        <li><a href="index.html">Inicio</a></li>
        <li>Nuestra empresa</li>
        <li>Quiénes somos</li>
      </ol>
    </div>
  </div>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row position-relative">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="our-story">
            <h4></h4>
            <h3>Quiénes somos</h3>
            <p>Somos una empresa habilitada ante el ministerio de transporte mediante RESOLUCIÓN No.
              20203040012745 del 22 de septiembre de 2020, certificada en las NTC -ISO 9001 :2015, ISO 14001:2015,
              OHSAS 18001:2007 y Guía RUC rev.7. Creada con el ánimo de brindar un servicio de transporte de carga
              liquida tipo combustibles y derivados del petróleo, carga seca y extra dimensionada a nivel nacional e
              internacional, estructurada con las medidas de Seguridad y Salud en el Trabajo, ambiente y seguridad vial
              (SSTA/SV) a través del mejoramiento continuo de las condiciones
              y el medio ambiente laboral, y el control eficaz de los peligros y riesgos en el lugar de trabajo.</p>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
          <img src="<?= BASE_URL ?>public/img/logo_grande_fondo.webp" class="img-fluid" style="max-width: 100%;" alt="">
        </div>
      </div>
    </div>
  </section>
</main>
<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once ($headerPath);
?>