<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="icon" href=".//images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href=".//css/styles.css">
    <script src=".//js/acordeon.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Silkscreen&family=Uncial+Antiqua&display=swap" rel="stylesheet"> 
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- ------------------------------------------------------------------------------------------------------------ -->
    <button class="accordion">Formulario de Contacto</button>
    <div class="panel">
        <form class="formulario">
            <h4>Nombre</h4>
            <label for="nombreTextBox">Nombre:</label>
            <input type="text" id="nombreTextBox">
            <br>
            <label for="apellidoTextBox">Apellido:</label>
            <input type="text" id="apellidoTextBox">
            <br>
            
            <h4>Fecha de nacimiento</h4>
            <input type="date" id="fechaNacimiento">

            <h4>Sexo</h4>
            <label for="fechaNacimiento"></label>
                <input type="radio" id="mujer" name="option">
                <label for="mujer">Mujer</label>
                <br>
                <input type="radio" id="hombre" name="option">
                <label for="hombre">Hombre</label>
                <br>
                <input type="radio" id="otro" name="option">
                <label for="otro">Otro</label>
            <h4>Pais de Origen</h4>
                
            
            <label for="estilo">Pais de residencia</label>
            <br>
            <select id="estilo">
                <option value="default" selected>Selecciona una opcion</option>
                <option value="moderno">Mexico</option>
                <option value="clasico">EUA</option>
                <option value="renacentista">Canada</option>
            </select>
                
            <h4 for="textArea">
                Haganos saber sus comentarios:
            </label>
            <br>
            <textarea id="textArea" cols="50" rows="10"></textarea>
            <button type="button" onclick="alert('Datos enviados.\nGracias!!!')">
                Enviar
            </button>
        </form>
    </div>
    <br><br><br>

    <button class="accordion">Formulario de experiencia de usuario en la pagina web</button>
    <div class="panel">
            <form class="formulario">
                <h4>Rating de la experiencia en general (1-10)</h4>
                <input type="range" name="rango" max="10" min="0">
                <h4>Disfruto de su experiencia en general?</h4>
                <label for="SiR">Si</label>
                <input type="radio" id="SiR" name="option">
                <label for="no">No</label>
                <input type="radio" name="option" id="SiR">
                
                <h4>Cosas que mas te gustaron (Se pueden elegir mas de uno)</h4>
                <input type="checkbox" id="color">
                <label for="color">Color</label>
                <input type="checkbox" id="layout">
                <label for="layout">Layout</label>
                <br>
                <h4>Pagina preferida</h4>
                <label for="estilo">Elige una pagina:</label>
                <br>
                <select id="estilo">
                    <option value="default" selected>Selecciona una opcion</option>
                    <option value="moderno">Pagina de Inicio</option>
                    <option value="clasico">Historia de Microsoft</option>
                    <option value="renacentista">Formulario de Contacto</option>
                </select>
                <br><br><br>
                <br><br><br>
                <label for="textArea">
                    Haganos saber sus comentarios:
                </label>
                <br>
                <textarea id="textArea" cols="50" rows="10"></textarea>
                <button type="button" onclick="alert('Datos enviados.\nGracias!!!')">
                    Enviar
                </button>
                <input type="reset" value="Reiniciar">
            </form>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Redes-->
    <section id="redesSociales">
        <p>Seguir Microsoft: </p> 
        <a href="https://twitter.com/MSFTMexico">
            <i class="fa-brands fa-twitter fa-3x"></i>
        </a>
        <a href="https://www.linkedin.com/uas/login?session_redirect=%2Fcompany%2F1035">
            <i class="fa-brands fa-linkedin fa-3x"></i>
        </a>
    </section>

<!-- ---------------------------------------------------------------------- -->
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
</html>