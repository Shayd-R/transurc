<?php
define('BASE_URL', '../../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>
<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/3.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>GALERIA DE IMAGENES</h2>
      <ol>
        <li><a href="<?= BASE_URL ?>">Incio</a></li>
        <li>Nuestra empresa</li>
        <li>Nuestro personal</li>
      </ol>
    </div>
  </div>

  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">
        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Todas</li>
          <li data-filter=".filter-vehiculos">Vehiculos</li>
          <li data-filter=".filter-personal">Personal</li>
        </ul>
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/2.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/2.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-personal">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/9.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Personal</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/9.webp" data-gallery="portfolio-gallery-personal"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/11.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/11.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/7.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/7.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/8.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/8.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/10.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/10.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/3.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/4.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/4.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vehiculos">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/12.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vehiculos</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/12.webp" data-gallery="portfolio-gallery-vehiculos"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-personal">
            <div class="portfolio-content h-100">
              <img src="<?= BASE_URL ?>public/img/carrusel/1.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Personal</h4>
                <a href="<?= BASE_URL ?>public/img/carrusel/1.webp" data-gallery="portfolio-gallery-personal"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
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