<?php
$BASE_URL = filter_input(INPUT_SERVER, 'BASE_URL', FILTER_SANITIZE_URL);
define('BASE_URL', $BASE_URL);
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once($headerPath);
?>
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
          <img src="<?= BASE_URL ?>public/img/logo_grande.webp" class="img-fluid custom-img" alt="">
        </div>
        <div class="col-lg-8 text-center">
          <h2 data-aos="fade-down">BIENVENIDO A <span>TRANSPORTES DE CARGA DEL SUR SAS</span></h2>
          <p data-aos="fade-up">Somos una empresa especializada en el transporte de carga pesada.</p>
          <a data-aos="fade-up" data-aos-delay="200" href="<?= BASE_URL ?>inicio/contactenos.php"
            class="btn-get-started">Solicitar servicio</a>
        </div>
      </div>
    </div>
  </div>


  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url(public/img/carrusel/1.webp);"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/2.webp)"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/3.webp)"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/4.webp)"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/7.webp)"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/8.webp)"></div>
    <div class="carousel-item" style="background-image: url(public/img/carrusel/10.webp)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section>


<main id="main">

  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url(<?= BASE_URL ?>public/img/carrusel/1.webp);"
          data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Transur </h3>
          <p>Somos una empresa habilitada ante el ministerio de transporte mediante RESOLUCIÓN No.
            20203040012745 del 22 de septiembre de 2020, certificada en las NTC -ISO 9001 :2015, ISO 14001:2015,
            OHSAS 18001:2007 y Guía RUC rev.7.</p>
          <a class="btn btn-outline-warning" href="<?= BASE_URL ?>inicio/nuestra_empresa/quienes_somos.php"
            class="btn-get-started">Leer
            más</a>



        </div>
      </div>

    </div>
  </section>

  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Nuestros clientes</h2>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item d-flex flex-column justify-content-center align-items-center">
                <img src="<?= BASE_URL ?>public/img/nuestros_clientes/1.webp" class="img-fluid testimonial-img" alt="">
                <!-- <h2 class="mt-3">GRAN TIERRA</h2> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item d-flex flex-column justify-content-center align-items-center">
                <img src="<?= BASE_URL ?>public/img/nuestros_clientes/2.webp" class="img-fluid testimonial-img" alt="">
                <!-- <h2 class="mt-3">TERPEL</h2> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item d-flex flex-column justify-content-center align-items-center">
                <img src="<?= BASE_URL ?>public/img/nuestros_clientes/3.webp" class="img-fluid testimonial-img" alt="">
                <!-- <h2 class="mt-3">ECOPETROL</h2> -->
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>


  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-header">
        <h2>Certificados</h2>
      </div>
      <div class="row justify-content-center align-items-center g-5">
        <div class="col-lg-12">
          <article class="blog-details">
            <div class="post-img d-flex justify-content-center align-items-center">
              <img src="<?= BASE_URL ?>public/img/baner.webp" class="img-fluid" alt="">
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>




</main>

<?php
$headerPath = realpath(BASE_URL . 'templates/partials/footer.php');
include_once($headerPath);
?>