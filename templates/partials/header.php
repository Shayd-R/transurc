<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="SolicionesTech">

    <link rel="icon" href="<?= BASE_URL ?>public/img/logo-icono.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/main.css">
    <title>Transur</title>
</head>

<body>

    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
           <a href="<?= BASE_URL ?>" class="logo d-flex align-items-center">
            </a>  
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?= BASE_URL ?>">Inicio</a></li>
                    <li class="dropdown"><a href="#"><span>Nuestra empresa</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/quienes_somos.php">Quienes somos</a></li>
                            <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/mision_vision.php">Misión y visión</a>
                            </li>
                            <li class="dropdown"><a href="#"><span>Certificaciones</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/certificados/certificado_iso_45001.php">ISO 45001</a></li>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/certificados/certificado_iso_14001.php">ISO 14001</a></li>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/certificados/certificado_iso_9001.php">ISO 9001</a></li>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/certificados/certificado_ruc.php">RUC</a></li>               
                                </ul>
                            </li>
                            </li>
                            <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/galeria_imagenes.php">Galeria de imagenes</a></li>
                            <li class="dropdown"><a href="#"><span>Politicas</span> <i
                                        class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_sistema_gestion_integral.php">Politica
                                            sistema de gestion integral</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_desconexion_laboral.php">Politica
                                            de desconexion
                                            laboral</a></li>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_uso_epp.php">Politica
                                            de uso de epp</a></li>
                                    <li><a href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_siplaft.php">Politica
                                            siplaft</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_proteccion_actores_viales_vulnerables.php">Politica
                                            proteccion actores viales vulnerables</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_prevencion_distraccion.php">Politica
                                            prevención de la
                                            distración</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_regulacion_horas_conduccion_descanso.php">Politica
                                            de
                                            regulacion de horas de conducción y descanso </a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_regulacion_velocidad.php">Politica
                                            de regulación de velocidad</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_control_seguimiento_seguridad_vial.php">Politica
                                            de control y seguimiento para la seguridad vial</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_psicosocial.php">Politica
                                            psicosocial</a></li>
                                    <li><a
                                            href="<?= BASE_URL ?>inicio/nuestra_empresa/politicas/politica_no_alcohol_drogas_fumadores.php">Politica
                                            no alcohol, drogas y fumadores</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= BASE_URL ?>inicio/servicios.php">Servicios</a></li>
                    <li><a href="<?= BASE_URL ?>inicio/contactenos.php">Contactenos</a></li>
                </ul>
            </nav>
        </div>
    </header>