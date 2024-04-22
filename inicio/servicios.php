<?php
define('BASE_URL', '../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>

<main id="main">

  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/3.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>SERVICIOS</h2>
      <ol>
        <li><a href="<?= BASE_URL ?>">Inicio</a></li>
        <li>Servicios</li>
      </ol>

    </div>
  </div>

  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>COBERTURA NACIONAL E INTERNACIONAL</h2>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <img src="<?= BASE_URL ?>public/img/servicios/4.png" style="width: 100px; margin-top: 20px;">
            </div>
            <h3>Vehículos tractocamión</h3>
            <ul>
              <li>Transporte de hidrocarburo</li>
              <li>Transporte de aceite residual</li>
              <li>Transporte de combustible (Gasolina/Bioacem)</li>
              <li>Transporte de carga seca</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
            <img src="<?= BASE_URL ?>public/img/servicios/1.png" style="width: 70px;">
            </div>
            <h3>Vehículos dobletroque</h3>
            <ul>
              <li>Transporte de agua potable</li>
              <li>Transporte de riego con sistema de flauta</li>
              <li>Transporte de hidrocarburos</li>
              <li>Transporte de agua contaminada</li>
              <li>Transporte de combustible (Gasolina/Bioacem)</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <img src="<?= BASE_URL ?>public/img/servicios/2.webp" style="width: 70px;">

            </div>
            <h3>Vehículos sencillos</h3>
            <ul>
              <li>Transporte de agua potable</li>
              <li>Transporte de combustible (Gasolina/Bioacem)</li>
              <li>Transporte de agua industrial</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-truck"></i>

            </div>
            <h3>Vehículos de contingencia</h3>
            <ul>
              <li>Turbo con kit de contingencia de derrame</li>
            </ul>
          </div>
        </div>




      </div>

    </div>
  </section>

</main>
<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once ($headerPath);
?>