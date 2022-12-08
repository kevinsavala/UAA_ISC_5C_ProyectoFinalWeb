<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title>Cosas de tatuajes</title>
  <link rel="icon" href=".//images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href=".//css/styles.css">
  <script src=".//js/carousel.js" defer></script>
</head>

<!-- Menu en parte posterior -->

<body>

  <!-- Navbar (Barra de Navegação) -->
  <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
    <div class="container">

      <!-- header -->
      <div class="navbar-header">

        <!-- botão toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">alternar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

        <!-- logo-barra -->
        <a href="index.html" class="navbar-brand">
          <span class="img-logo">SpotiMaya</span>
        </a>
      </div>

      <!-- navbar -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Premium</a></li>
          <li><a href="">Ajuda</a></li>
          <li><a href="">Baixar</a></li>

          <li class="divisor" role="separator"></li>

          <li><a href="">Inscreva-se</a></li>
          <li><a href="">Entrar</a></li>
        </ul>
      </div>

    </div><!-- /Container -->
  </nav> <!-- /Nav -->

  <!-- capa -->
  <div class="capa">
    <div class="texto-capa">
      <h1>Música para todos</h1>
      <a href="#" class="btn btn-lg btn-custom btn-roxo">Aproveite o Spotify Free</a>
      <a href="#" class="btn btn-lg btn-custom btn-branco">Obter o Spotify Free</a>

    </div>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------ -->

  <!--Carrusel de fotos-->
  <section class="carrusel">
    <div class="mySlides fade">
      <img src="images/pro8.png" style="width: 100%;">
    </div>

    <div class="mySlides fade">
      <img src="images/surface.png" style="width: 100%;">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>
  </section>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- Eleccion de elementos  -->
  <br>
  <br>
  <section class="Img">
    <article class="Window">
      <img src="images/Window.webp" class="rounded" style="float: unset;">
      <a href="https://www.microsoft.com/es-mx/microsoft-365/buy/compare-all-microsoft-365-products?icid=MSCOM">
        <figcaption> Elige tu Microsoft 365</figcaption>
      </a>
    </article>
    <article class="Window">
      <img src="images/surface-go.webp" class="rounded" style="float: unset;">
      <a href="https://www.microsoft.com/es-mx/surface?icid=MSCOM_QL_Surface">
        <figcaption>Comprar Surface </figcaption>
      </a>
    </article>
    <article class="Window">
      <img src="images/xbox.webp" class="rounded" alt="center">
      <a href="https://www.microsoft.com/es-mx/store/b/xbox?icid=MSCOM_QL_Xbox">
        <figcaption>Comprar Xbox</figcaption>
      </a>
    </article>
    <article class="Window">
      <img src="images/Window.webp" class="rounded" alt="center">
      <a href="https://www.microsoft.com/es-mx/windows/get-windows-11?icid=MSCOM_QL_Windows">
        <figcaption>Obtener Windows 11</figcaption>
      </a>
    </article>
  </section>
  <br><br>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!--Imag varias -->
  <section class="secc2">
    <article id="Art1">

      <img src="images/365.png">

      <h1>Microsoft 365</h1>

      <p>
        <span>Aplicaciones prémium de Office, almacenamiento adicional en la nube, seguridad avanzada y mucho más, todo
          en una conveniente suscripción única.</span>
        <br>
        <a
          href="https://www.microsoft.com/es-mx/microsoft-365/p/microsoft-365-personal/cfq7ttc0k5bf?icid=mscom_marcom_CPH1a_M365Personal&activetab=pivot%3aoverviewtab">Para
          1 persona></a>
        <br>
        <a href="https://www.microsoft.com/library/errorpages/smarterror.aspx?correlationId=$(cvToken)">Para 6
          persona></a>
      </p>
    </article>

    <article id="Art1">

      <img src="images/studio.png">

      <h1>Surface Laptop Studio</h1>

      <p>
        <span>Da rienda suelta a tu creatividad con el dispositivo Surface Laptop más poderoso. Ahora disponible con
          Windows 11.
        </span>
        <br>
        <a
          href="https://www.microsoft.com/es-mx/surface/devices/surface-laptop-studio?icid=mscom_marcom_CPH2a_SurfaceLaptopStudio#overview">Comprar
          ahora></a>

      </p>
    </article>

    <article id="Art1">

      <img src="images/Pc.png">

      <h1>PC Game Pass</h1>

      <p>
        <span>Desbloquea más de 100 excelentes juegos y EA Play, y recibe además el primer mes por $10. Oferta
          disponible solo para los suscriptores nuevos..</span>
        <br>
        <a href="https://www.xbox.com/es-mx/games/store/pc-game-pass/cfq7ttc0kgq8?icid=mscom_marcom_CPH3a_PCGamePass">Suscríbete
          ahora></a>

      </p>
    </article>
    <article id="Art1">

      <img src="images/edge.png">

      <h1>Microsoft Edge</h1>

      <p>
        <span>Un rendimiento de categoría mundial con más privacidad, más productividad y más valor mientras
          navegas.</span>
        <br>
        <a href="https://www.microsoft.com/es-es/edge?form=MI13F3&OCID=MI13F3">Descargar ahora></a>

      </p>
    </article>
  </section>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- One drive-->
  <section id="imagenOneDrive">
    <article>
      <a
        href="https://www.microsoft.com/es-mx/microsoft-365/onedrive/online-cloud-storage?icid=mscom_marcom_MPH1a_OneDrive">
        <img src="images/oneD.png" alt=""></a>
    </article>
  </section>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- Para la empresa -->
  <h1>Para la empresa</h1>
  <section class="secc2">
    <article id="Art1">

      <img src="images/Go2.png">

      <h1>Surface Laptop Go 2 para empresas</h1>

      <p>
        <span>Una elegante portátil portable que ofrece una increíble experiencia de escritura, Windows 11 Pro y
          rendimiento de clase profesional.</span>
        <br>
        <a
          href="https://www.microsoft.com/es-mx/surface/business/surface-laptop-go-2?icid=mscom_marcom_CPW1a_SurfaceLaptopGo2forBusiness&icid=FY22SpringSurface">Para
          Más información></a>

      </p>
    </article>

    <article id="Art1">

      <img src="images/teams.png">

      <h1>Recibe Microsoft Teams gratis</h1>

      <p>
        <span>Reuniones en línea, chat y almacenamiento compartido en la nube, todo en un mismo lugar.
        </span>
        <br>
        <a href="https://www.microsoft.com/es-mx/microsoft-teams/free?icid=mscom_marcom_CPW2a_MicrosoftTeams">Inscríbete
          gratis></a>

      </p>
    </article>

    <article id="Art1">

      <img src="images/empresas.png">

      <h1>Microsoft 365 para empresas</h1>

      <p>
        <span>Mantente a la vanguardia con nuestras poderosas aplicaciones para la productividad, la conexión y la
          seguridad.</span>
        <br>
        <a
          href="https://www.microsoft.com/es-mx/microsoft-365/business/compare-all-microsoft-365-business-products?icid=mscom_marcom_CPW3a_M365forBusiness&activetab=tab%3aprimaryr2">Comprar
          ahora></a>

      </p>
    </article>
    <article id="Art1">

      <img src="images/cloud.png">

      <h1>Bienvenido a tu Windows 365 Cloud PC</h1>

      <p>
        <span>Disfruta de tu experiencia de Windows en forma segura por streaming desde la nube Microsoft a cualquier
          dispositivo.</span>
        <br>
        <a href="https://www.microsoft.com/es-mx/windows-365?icid=mscom_marcom_CPW4a_Windows365">Adquiérelo hoy></a>

      </p>
    </article>
  </section>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- Redes-->
  <section id="redesSociales">
    <p>Seguir Microsoft: </p>
      <a href="https://twitter.com/MSFTMexico">
        <i class="fa-brands fa-twitter fa-3x"></i>
      </a>
      <a href="https://www.linkedin.com/uas/login?session_redirect=%2Fcompany%2F1035"><i
          class="fa-brands fa-linkedin fa-3x"></i></a>
  </section>
  <!--Subir-->
  <section id="seccion">
    <a href="">
      <button class="greenBox">
        Subir
      </button>
    </a>
  </section>
  <!-- ------------------------------------------------------------------------------------------------------------ -->
  <!-- pie de pagina-->
  <footer class="secc1">
    <article class="art">
      <h6>Novedades</h6>
      <a href="" class="opcion-menu">Microsoft 365</a>
      <br>
      <a href="" class="opcion-menu">Aplicaciones de Windows 11</a>
    </article>
    <article class="art">
      <h6>Microsoft Store</h6>
      <a href="" class="opcion-menu">Perfil de la cuenta</a>
      <br>
      <a href="" class="opcion-menu">Centro de descargas</a>
      <br>
      <a href="" class="opcion-menu">Soporte de Microsoft Store</a>
      <br>
      <a href="" class="opcion-menu">Devoluciones y reembolsos</a>
      <br>
      <a href="" class="opcion-menu">Seguimiento de pedidos</a>
    </article>
    <article class="art">
      <h6>Educación</h6>
      <a href="" class="opcion-menu">Microsoft Educación</a>
      <br>
      <a href="" class="opcion-menu">Dispositivos para el sector educativo</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Teams para Educación</a>
      <br>
      <a href="" class="opcion-menu">Microsoft 365 Educación</a>
      <br>
      <a href="" class="opcion-menu">Office Educación</a>
      <br>
      <a href="" class="opcion-menu">Entrenamiento y desarrollo para educadores</a>
      <br>
      <a href="" class="opcion-menu">Ofertas para estudiantes y padres</a>
      <br>
      <a href="" class="opcion-menu">Azure para estudiantes</a>
    </article>
    <article class="art">
      <h6>Empresa</h6>
      <a href="" class="opcion-menu">Microsoft Cloud</a>
      <br>
      <a href="" class="opcion-menu">Seguridad de Microsoft</a>
      <br>
      <a href="" class="opcion-menu">Azure</a>
      <br>
      <a href="" class="opcion-menu">Dynamics 365</a>
      <br>
      <a href="" class="opcion-menu">Microsoft 365</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Advertising</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Manufactura</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Teams</a>
    </article>
    <article class="art">
      <h6>Desarrollador y TI</h6>
      <a href="" class="opcion-menu">Centro de desarrolladores</a>
      <br>
      <a href="" class="opcion-menu">Documentación</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Learn</a>
      <br>
      <a href="" class="opcion-menu">Comunidad de Microsoft Tech</a>
      <br>
      <a href="" class="opcion-menu">Marketplace de Azure</a>
      <br>
      <a href="" class="opcion-menu">AppSource</a>
      <br>
      <a href="" class="opcion-menu">Microsoft Power Platform</a>
      <br>
      <a href="" class="opcion-menu">Visual Studio</a>
    </article>
    <article class="art">
      <h6>Compañía</h6>
      <a href="" class="opcion-menu">Trabajos</a>
      <br>
      <a href="" class="opcion-menu">Acerca de Microsoft</a>
      <br>
      <a href="" class="opcion-menu">Privacidad en Microsoft</a>
      <br>
      <a href="" class="opcion-menu">Inversionistas</a>
      <br>
      <a href="" class="opcion-menu">Sustentabilidad</a>
    </article>
  </footer>
</body>

<script src="https://kit.fontawesome.com/e0511eebe4.js" crossorigin="anonymous"></script>

</html>