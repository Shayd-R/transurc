<?php
define('BASE_URL', '../../');
$headerPath = realpath(BASE_URL . 'templates/partials/header.php');
include_once ($headerPath);
?>
<main id="main">
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url(<?= BASE_URL ?>public/img/headers/4.webp);">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>MISION Y VISION</h2>
      <ol>
        <li><a href="<?= BASE_URL ?>">Incio</a></li>
        <li>Nuestra empresa</li>
        <li>Misión y visión</li>
      </ol>
    </div>
  </div>

  <section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">
      <ul class="nav nav-tabs row  g-2 d-flex">
        <li class="nav-item col-6">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4>Misión</h4>
          </a>
        </li>
        <li class="nav-item col-6">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>Visión</h4>
          </a>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
              data-aos="fade-up" data-aos-delay="100">
              <h3>Misión</h3>
              <p class="fst-italic">
                Brindar un servicio de transporte de carga (líquida y seca) a
                nivel nacional satisfaciendo plenamente en tiempo y forma los
                requerimientos de nuestros clientes garantizando un servicio
                que destaque por la seguridad, puntualidad y calidad,
                con respaldo de tecnología adecuada, personal calificado y
                competitivo, quienes cuentan con nuestro apoyo para su
                formación ética y profesional y respetando el medio ambiente.
              </p>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="<?= BASE_URL ?>public/img/mision_vision/Mision.webp" alt="" style="width: 500px"
                class="img-fluid">
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Visión</h3>
              <p class="fst-italic">
                Para el año 2026 ser una empresa líder en el transporte de
                (carga liquida y seca), consolidarnos en el mercado y
                expandirnos a nivel nacional e internacional como una empresa
                de calidad que brinda sus servicios con excelencia,
                confiabilidad, eficiencia y seguridad, acorde con el cambio
                de la tecnología y comprometiéndonos con el medio ambiente,
                servicio al cliente y la formación integral de sus colaboradores.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="<?= BASE_URL ?>public/img/mision_vision/Vision.webp" alt="" style="width: 500px"
                class="img-fluid">
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