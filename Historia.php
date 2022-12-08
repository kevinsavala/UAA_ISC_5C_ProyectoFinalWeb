<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Historia</title>
    <link rel="icon" href=".//images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href=".//css/styles.css">
    <script src=".//js/carousel.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- Menu en parte posterior -->
    <nav class="menu">
        <div>
            <a href="https://www.microsoft.com/es-mx/">
                <img src=".//images/RE1Mu3b.png" class="logo-ancla">
            </a>
            <a href="https://www.microsoft.com/es-mx/microsoft-365?rtc=1" class="opcion-menu">Microsoft 365</a>
            <a href="https://www.microsoft.com/es-mx/microsoft-teams/group-chat-software?rtc=1"
                class="opcion-menu">Teams</a>
            <a href="https://www.microsoft.com/es-mx/windows" class="opcion-menu">Windows</a>
            <a href="https://www.microsoft.com/en-us/surface" class="opcion-menu">Surface</a>
            <a href="https://www.xbox.com/es-MX/" class="opcion-menu">Xbox</a>
            <a href="Formulario.html" class="opcion-menu">Formulario</a>
            <a href="https://support.microsoft.com/es-es" class="opcion-menu">Soporte</a>
        </div>
        <div>
            <a href="" class="opcion-menu">Todo Microsoft</a>
            <a href="" class="opcion-menu">Buscar</a>
            <a href="" class="opcion-menu">Carrito</a>
            <a href="" class="opcion-menu">Login</a>
        </div>
    </nav>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- Encabezado-->
    <br>
    <header>
        <img src="images/window98.png" alt="" width="38px">
        <h1 class="animate__animated animate__flash">
            Historia de Microsoft
        </h1>
    </header>
    <section>
        <p>
            <img src="images/bill.jpg" align="right">
            La Historia de Microsoft comienza el 4 de abril de 1975, cuando fue fundada por Bill Gates y Paul Allen en
            Albuquerque.​ Sus mejores productos actuales en venta son el Windows y la suite Microsoft Office

            En sus inicios, en el año 1980, Microsoft formó con IBM una importante unión que permitió ligar el sistema
            operativo de Microsoft con los ordenadores de IBM, pagando a Microsoft los derechos de cada venta. En 1985,
            IBM solicitó a Microsoft que hiciera un nuevo sistema operativo para sus ordenadores llamado OS/2. Microsoft
            hizo el sistema operativo, pero continuó vendiendo su propia versión en directa competición con el OS/2. La
            versión de Microsoft eclipsó al OS/2 en términos de ventas. Cuando Microsoft lanzó sus versiones de Windows
            en los años 90, ya había captado el 90 % de la cuota de mercado de los ordenadores personales del mundo.

            A fecha de 2007, Microsoft tiene un crédito anual de 51,12 millones de dólares y por lo menos 79 000
            empleados en 102 países. Desarrolla, fabrica, licencia y apoya una amplia gama de productos de software y
            hardware para los dispositivos informáticos.
        </p>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!--video-->
    <hr>
    <br>
    <section>
        <div style="text-align:center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Xjq0kljBZnY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>
   
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- Imagenes-->
    <br>
    <hr>
    <br> 
    <section id="Secc">
        <h2 class="animate__animated animate__wobble">Evolucion de Microsoft</h2>
        <div class="container">
            <img src="images/Xbox Series X.jpg" alt="xbox" class="image">
            <div class="overlay">
                <div class="text">Consolas</div>
            </div>
        </div>
        <div class="container">
            <img src="images/la.jpg" alt="Laptop" class="image">
            <div class="overlayBottom">
                <div class="text">Laptops</div>
            </div>
        </div>

        <div class="container">
            <img src="images/This is how Microsoft designed its new colorful Windows 10 icons.jpg" alt="" class="image">
            <div class="overlayZoom">
                <div class="text">Software</div>
            </div>
        </div>
    </section>
    <br>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- audio-->
    <hr>
    <section>
        <div style="text-align:center;">
            <h2>Bill Gates: Datos Curiosos</h2>
            <audio class="audio" id="player" src="media/Bill Gates.mp3"></audio>
            <div>
                <button onclick="document.getElementById('player').play()" class="audioPlayer">Play</button>
                <button onclick="document.getElementById('player').pause()" class="audioPlayer">Pausa</button>
                <button onclick="document.getElementById('player').volume+=0.1" class="audioPlayer">Volumen +</button>
                <button onclick="document.getElementById('player').volume-=0.1" class="audioPlayer">Volumen -</button>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <section class="table">

        <table>
            <tr>
                <th colspan="2"></th>
                <th>Windows</th>
                <th>Otros sistemas operativos</th>
            </tr>
            <tr>
                <td colspan="2">Seguridad</td>
                <td>No</td>
                <td>Si</td>
            </tr>
            <tr>
                <td colspan="2">Amplia gama de productos</td>
                <td>Si</td>
                <td>No</td>
            </tr>
            <tr>
                <td colspan="2">Office 365 ready</td>
                <td rowspan="2">Si</td>
                <td rowspan="2">No</td>
            </tr>
            <tr>
                <td colspan="2">Game Pass incluido</td>
            </tr>
            <tr>
                <td colspan="2">Soporte para videojuegos</td>
                <td>Si</td>
                <td>No</td>
            </tr>
        </table>
    </section>

    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <!-- Redes-->
    <section id="redesSociales">
        <p>Seguir Microsoft: </p> 
        <a href="https://twitter.com/MSFTMexico">
            <i class="fa-brands fa-twitter fa-3x"></i>
        </a>
        <a href="https://www.linkedin.com/uas/login?session_redirect=%2Fcompany%2F1035"><i
            class="fa-brands fa-linkedin fa-3x"></i>
        </a>
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
    <footer class="secc">
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