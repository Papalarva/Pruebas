    <!-- PRELOADER -->
    <div class="loader">
        <div class="loader__onda">
            <div class="loader__halo"></div>
            <div class="loader__halo"></div>
        </div>
    </div>
    <header class="header">
        <h1 class="header__titulo">CBTIS 128</h1>
        <p class="header__frase">"Alcancemos el mañana con nuestra propia tecnología"</p>
        <nav>
            <ul class="header__lista">
                <li class="header__elemento"><a class="header__enlace" href="../pages/nosotros.html">Nosotros</a></li>
                <li class="header__elemento"><a class="header__enlace" href="../pages/departamentos.html">Departamentos</a></li>
                <li class="header__elemento"><a class="header__enlace" href="../pages/alumnos.html">Alumnos</a></li>
                <li class="header__elemento"><a class="header__enlace" href="#">Transparencia</a></li>
                <li class="header__elemento"><a class="header__enlace" href="../pages/concursos.html">Concursos</a></li>
                <li class="header__elemento"><a class="header__enlace" href="../pages/contacto.html">Contacto</a></li>
            </ul>
        </nav>
        <button class="boton video__mostrar">¡CONOCENOS!</button>
        <!-- VIDEO -->
        <div class="video__contenedor">
            <video class="video" controls="">
                <source src="assets/video/CBTis 128 2021.mp4" type="video/mp4" codecs="avc1,mp4a" />
            </video>
            <button class="video__ocultar">
                <i class="bx bx-x video__cerrar"></i>
            </button>
        </div>
        <!-- NAV -->
        <nav id="header__menu" class="header__menu">
            <div class="menu__logo">
                <a href="index.html"> <img class="menu__img" src="assets/images/logo.svg" alt="Logo CBTIS128"></a>
                <h1 class="menu__titulo">CBTIS 128</h1>
            </div>
            <div class="nav__enlaces">
                <a href="../pages/nosotros.html" class="menu__pagina">Nosotros</a>
                <a href="../pages/departamentos.html" class="menu__pagina">Departamentos</a>
                <a href="../pages/alumnos.html" class="menu__pagina ">Alumnos</a>
                <a href="#" class="menu__pagina pagina__oculta">Transparencia</a>
                <a href="../pages/concursos.html" class="menu__pagina pagina__oculta">Concursos</a>
                <a href="../pages/contacto.html" class="menu__pagina pagina__oculta">Contacto</a>
                <!-- start menu desplegable -->
                <div class="dropdown">
                    <button class="boton menu__semestres menu__oculto">Ver más</button>
                    <div class="dropmenu">
                        <a class="menu__pagina " href="#">Transparencia</a>
                        <a class="menu__pagina " href="../pages/concursos.html">Concursos</a>
                        <a class="menu__pagina " href="../pages/contacto.html">Contacto</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="boton menu__semestres">Semestres</button>
                    <div class="dropmenu">
                        <a href="#" class="menu__pagina menu__pagina-dropdown">2do Semestre</a>
                        <a href="#" class="menu__pagina menu__pagina-dropdown">4to Semestre</a>
                        <a href="#" class="menu__pagina menu__pagina-dropdown">6to Semestre</a>
                    </div>
                </div>
                <!-- end menu desplegable -->
            </div>
            <button class="menu__boton">
                <i class="bx bx-menu bx-lg menu__icono"></i>
            </button>
        </nav>
    </header>
    <!-- MENU MOVIL -->
    <div class="contenedor__menu__movil">
        <nav class="menu__movil">
            <button id="toggle__semestres" class="movil__enlace toggle__semestres" href="#">Semestres<i class='bx bxs-chevron-right chevron__icon'></i></button>
            <a class="movil__enlace" href="#">Inicio</a>
            <a class="movil__enlace" href="#">Alumnos</a>
            <a class="movil__enlace" href="#">Concursos</a>
            <a class="movil__enlace" href="#">Departamentos</a>
            <a class="movil__enlace" href="#">Directorio</a>
            <a class="movil__enlace" href="#">Transparencia</a>
            <a class="movil__enlace" href="#">Nosotros</a>
            <a class="movil__enlace" href="#">Contacto</a>
        </nav>

    </div>
    <div class="contenedor__menu__movil__semestres">
        <div class="movil__enlaces__semestres">
            <a href="#" class="movil__enlace enlace__semestres">2do Semestre</a>
            <a href="#" class="movil__enlace enlace__semestres">4to Semestre</a>
            <a href="#" class="movil__enlace enlace__semestres">6to Semestre</a>
        </div>
    </div>
    <script>
        /*==============================
        =          LOAD          =
        ==============================*/
        window.addEventListener("load", function() {
            setTimeout(() => {
                loader = document.querySelector(".loader");
                loader.style.opacity = "0";
                loader.style.transition = "opacity 2s ease";
                setTimeout(() => {
                    loader.style.display = "none";
                }, 2000);
            }, 2000);
        });
        /*=====  End of LOAD  ======*/

        /*==============================
        =          VIDEO          =
        ==============================*/
        var btn__mostrar = document.querySelector(".video__mostrar");
        var btn__ocultar = document.querySelector(".video__ocultar");
        function show__video() {
            var video__contenedor = document.querySelector(".video__contenedor");
            var video = document.querySelector(".video");
            if ((video__contenedor.style.display = "none")) {
                video__contenedor.style.display = "flex";
                video__contenedor.style.opacity = "0";
                video__contenedor.style.transition = "opacity .5s ease";
                video.style.display = "block";
                video.style.transition = "transform .5s ease";
                setTimeout(() => {
                    video.style.transform = "scale(1)";
                    video__contenedor.style.opacity = "1";
                }, 0);
                video.play();
                document.querySelector("body").style.overflowY = "hidden";
            }
        }
        function hide__video() {
            var video__contenedor = document.querySelector(".video__contenedor");
            var video = document.querySelector(".video");
            if ((video__contenedor.style.display = "flex")) {
                video.style.transform = "scale(0)";
                video__contenedor.style.transition = "opacity .5s ease";
                video__contenedor.style.opacity = "0";
                setTimeout(() => {
                    video.style.display = "none";
                    video__contenedor.style.display = "none";
                }, 500);
                video.pause();
                document.querySelector("body").style.overflowY = "scroll";
            }
        }
        btn__mostrar.addEventListener("click", show__video);
        btn__ocultar.addEventListener("click", hide__video);
        /*=====  End of VIDEO  ======*/

        /*==============================
        =          MENU SCROLL          =
        ==============================*/
        function enableScroll() {
            window.onscroll = function() {
                var windowHeight = $(window).scrollTop();
                var main = $("#main").offset();
                main = main.top;
                if (windowHeight >= main) {
                    $("#header__menu").fadeIn(500);
                } else {
                    $("#header__menu").fadeOut(500);
                }
            };
        }
        function disableScroll() {
            window.onscroll = function() {};
        }
        function menu__scroll() {
            if (screen.width >= 981) {
                $("#header__menu").hide(0);
                enableScroll();
            } else {
                $("#header__menu").show(0);
                disableScroll();
            }
            window.onresize = function() {
                if (window.innerWidth >= 981) {
                    $("#header__menu").hide(0);
                    enableScroll();
                } else {
                    $("#header__menu").show(0);
                    disableScroll();
                }
            };
        }
        window.onload = menu__scroll();
        /*=====  End of MENU SCROLL  ======*/
        /*==============================
        =          MENU MOVIL          =
        ==============================*/
        var menu__mostrar = document.querySelector(".menu__boton");
        function menu__movil() {
            var contenedor__menu = document.querySelector(".contenedor__menu__movil");
            var menu = document.querySelector(".menu__movil");
            contenedor__menu.classList.toggle("toggle__contenedor__menu");
            menu.classList.toggle("toggle__menu");
            document.querySelector(".body").style.overflowY = "hidden";
        }
        menu__mostrar.addEventListener("click", menu__movil);
        var contenedor__menu = document.querySelector(".contenedor__menu__movil");
        var menu = document.querySelector(".menu__movil");
        function close__menu__movil() {
            contenedor__menu.classList.remove("toggle__contenedor__menu");
            menu.classList.remove("toggle__menu");
            document.querySelector(".body").style.overflowY = "scroll";
        }
        contenedor__menu.addEventListener("click", close__menu__movil);
        var btn__semestres = document.getElementById("toggle__semestres");
        var contenedor__semestres = document.querySelector(
            ".contenedor__menu__movil__semestres"
        );
        var enlaces__semestres = document.querySelector(".movil__enlaces__semestres");
        function menu__semestres() {
            enlaces__semestres.style.display = "flex";
            menu.classList.remove("toggle__menu");
            contenedor__semestres.classList.toggle("toggle__contenedor__menu");
            setTimeout(() => {
                enlaces__semestres.classList.toggle("toggle__menu");
                document.querySelector(".body").style.overflowY = "hidden";
            }, 500);
        }
        btn__semestres.addEventListener("click", menu__semestres);
        function close__semestres() {
            contenedor__semestres.classList.remove("toggle__contenedor__menu");
            enlaces__semestres.classList.remove("toggle__menu");
            document.querySelector(".body").style.overflowY = "scroll";
        }
        contenedor__semestres.addEventListener("click", close__semestres);
        /*=====  End of MENU MOVIL  ======*/
    </script>