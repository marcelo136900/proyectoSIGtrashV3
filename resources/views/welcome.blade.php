<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de Puntos de acumulacion de residuos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        <!-- Fuentes y estilos -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet-minimap/dist/Control.MiniMap.css" />

        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />


        <!-- Scripts necesarios -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.min.js"></script>


    </head>
    <body class="antialiased">


    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Gestión de Residuos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>



<!-- Carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="Naturaleza">
            <div class="carousel-caption d-none d-md-block">
                <h5>Un futuro más limpio</h5>
                <p>Gestiona los residuos de manera eficiente con nuestra herramienta.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="Ciudad limpia">
            <div class="carousel-caption d-none d-md-block">
                <h5>Optimización inteligente</h5>
                <p>Planifica rutas y reduce acumulaciones críticas.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.google.com/imgres?q=basura%20en%20mercados%20de%20oruro&imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D2458729571044279&imgrefurl=https%3A%2F%2Fwww.facebook.com%2FLaVozDeOruro%2Fposts%2Fmercado-kantuta-vende-encima-la-basura-m%25C3%25A1s-de-una-semana-y-no-hicieron-el-recojo%2F2458729667710936%2F&docid=B9S0jCQ3EwiFZM&tbnid=FvboZ7_EAfFBpM&vet=12ahUKEwi0wLH82Z-KAxUap5UCHXtiMvUQM3oECGgQAA..i&w=2048&h=1536&hcb=2&ved=2ahUKEwi0wLH82Z-KAxUap5UCHXtiMvUQM3oECGgQAA" class="d-block w-100" alt="Reciclaje">
            <div class="carousel-caption d-none d-md-block">
                <h5>Comprometidos con el medio ambiente</h5>
                <p>Únete al cambio, uno de cada vez.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>



<!-- Contenedor del mapa -->
<div id="welcome-map" style="height: 500px; width: 100%;"></div>
                    
                    <!-- Botones de control -->
                    <div class="button-group mt-3">
                        <button id="toggleHeat" class="btn btn-primary">Mostrar/Ocultar Puntos de Calor</button>
                        <button id="toggleMarkers" class="btn btn-secondary">Mostrar/Ocultar Marcadores</button>
                        <button id="togglePolygons" class="btn btn-success">Mostrar/Ocultar Áreas</button>
                        <button id="toggleRoutes" class="btn btn-warning">Mostrar/Ocultar Rutas</button>
                        <button id="toggle-markers" class="btn btn-primary">Mostrar/Ocultar Marcadores</button>
                        <button id="toggle-shapes" class="btn btn-secondary">Mostrar/Ocultar Formas</button>



                        <button id="toggleBasureros" class="btn btn-primary btn-sm">Mostrar/Ocultar Basureros</button>
                        <button id="toggleContenedores" class="btn btn-primary btn-sm">Mostrar/Ocultar Contenedores</button>


                        <button id="toggleRutas" class="btn btn-primary btn-sm">Mostrar/Ocultar Rutas</button>



                        <button id="miUbicacion" class="btn btn-success">Mi Ubicación</button>



                        <button id="exportarJson" class="btn btn-primary">Exportar JSON</button>






                    </div>




<!-- Sección informativa -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Visualización Interactiva</h5>
                    <p class="card-text">Explora mapas interactivos con puntos críticos y rutas óptimas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Datos Centralizados</h5>
                    <p class="card-text">Accede a información detallada desde cualquier lugar.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Toma de Decisiones</h5>
                    <p class="card-text">Mejora la planificación y la eficiencia en la gestión de residuos.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    &copy; 2024 Gestión de Residuos | Todos los derechos reservados
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>



<script>
    // Destruir el mapa existente si ya está inicializado
if (window.mapInstance && window.mapInstance.remove) {
    window.mapInstance.remove();
}

// Inicializar el mapa
window.mapInstance = L.map('welcome-map').setView([-17.9647, -67.1067], 13);

// Añadir capa base
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(window.mapInstance);


// Configurar el Routing Machine
L.Routing.control({
    waypoints: [
        L.latLng(-17.9647, -67.1067), // Punto inicial
        L.latLng(-17.9764, -67.1038)  // Punto final
    ],
    routeWhileDragging: true, // Permite mover los puntos de la ruta
    lineOptions: {
        styles: [{ color: 'green', weight: 4 }] // Personalización de la línea de ruta
    }
}).addTo(window.mapInstance);



// Definir iconos personalizados
const iconos = {
    basureros: L.icon({
        iconUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2PEU7ikPQuSFpKDHjU5DsOblFW13QB0eI4g&s',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
    }),
    contenedores: L.icon({
        iconUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAIy1q0Bem9R5LA_nVdmMc3CVSAHGhy5HkeQ&s',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
    }),
};

// Recuperar elementos de LocalStorage
const elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];

// Función auxiliar para validar GeoJSON
function validarGeoJSON(geoJSON) {
    return geoJSON &&
           geoJSON.type === 'Feature' &&
           geoJSON.geometry &&
           (geoJSON.geometry.type === 'Point' || geoJSON.geometry.type === 'LineString' || geoJSON.geometry.type === 'Polygon');
}


// Crear grupos de capas para basureros, contenedores y rutas
const basurerosLayer = L.layerGroup();
const contenedoresLayer = L.layerGroup();
const rutasLayer = L.layerGroup(); // Nueva capa para rutas


// Renderizar los elementos guardados con validación
elementosGuardados.forEach((geoJSON) => {
    try {
        if (!validarGeoJSON(geoJSON)) {
            console.warn("Elemento inválido encontrado:", geoJSON);
            return; // Salta los elementos inválidos
        }

        // Si es un marcador (Point)
        if (geoJSON.geometry.type === "Point") {
            const tipo = geoJSON.properties?.tipo || "default";
            const icono = iconos[tipo] || new L.Icon.Default();

            const marker = L.marker(
                [geoJSON.geometry.coordinates[1], geoJSON.geometry.coordinates[0]],
                { icon: icono }
            ).bindPopup(`
                <table>
                    <tr><td><b>Descripción:</b></td><td>${geoJSON.properties?.popup || "Sin descripción"}</td></tr>
                    <tr><td><b>Tipo:</b></td><td>${geoJSON.properties?.tipo || "Sin tipo"}</td></tr>
                    <tr><td><b>Estado:</b></td><td>${geoJSON.properties?.estado || "Desconocido"}</td></tr>
                    <tr><td><b>Capacidad:</b></td><td>${geoJSON.properties?.capacidad || "No especificada"}</td></tr>
                </table>
            `);

            // Añadir el marcador a su respectiva capa
            if (tipo === "basureros") {
                basurerosLayer.addLayer(marker);
            } else if (tipo === "contenedores") {
                contenedoresLayer.addLayer(marker);
            }
        } 
        // Si es una ruta (LineString)
        else if (geoJSON.geometry.type === "LineString") {
            const ruta = L.geoJSON(geoJSON, {
                style: { color: "blue", weight: 4 } // Estilo para las rutas
            }).bindPopup("Ruta Guardada");

            rutasLayer.addLayer(ruta); // Añadir la ruta a su capa
        }
    } catch (error) {
        console.error("Error al procesar un elemento:", error, geoJSON);
    }
});

// Agregar las capas al mapa
basurerosLayer.addTo(window.mapInstance);
contenedoresLayer.addTo(window.mapInstance);
rutasLayer.addTo(window.mapInstance); // Añadir la capa de rutas




// Funcionalidad para mostrar/ocultar basureros
document.getElementById("toggleBasureros").addEventListener("click", function () {
    if (window.mapInstance.hasLayer(basurerosLayer)) {
        window.mapInstance.removeLayer(basurerosLayer);
    } else {
        window.mapInstance.addLayer(basurerosLayer);
    }
});

// Funcionalidad para mostrar/ocultar contenedores
document.getElementById("toggleContenedores").addEventListener("click", function () {
    if (window.mapInstance.hasLayer(contenedoresLayer)) {
        window.mapInstance.removeLayer(contenedoresLayer);
    } else {
        window.mapInstance.addLayer(contenedoresLayer);
    }
});

// Funcionalidad para mostrar/ocultar rutas
document.getElementById("toggleRutas").addEventListener("click", function () {
    if (window.mapInstance.hasLayer(rutasLayer)) {
        window.mapInstance.removeLayer(rutasLayer);
    } else {
        window.mapInstance.addLayer(rutasLayer);
    }
});





// Botón para centrar y mostrar la ubicación del usuario
document.getElementById("miUbicacion").addEventListener("click", function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const { latitude, longitude } = position.coords;

                // Centrar el mapa en la ubicación
                window.mapInstance.setView([latitude, longitude], 15);

                // Añadir marcador en la ubicación actual
                const ubicacionMarker = L.marker([latitude, longitude], {
                    title: "Tu ubicación"
                }).bindPopup("<b>Estás aquí</b>").addTo(window.mapInstance);

                // Abrir popup automáticamente
                ubicacionMarker.openPopup();
            },
            function (error) {
                console.error("Error al obtener la ubicación: ", error);
                alert("No se pudo obtener tu ubicación. Asegúrate de dar permisos de geolocalización.");
            }
        );
    } else {
        alert("Tu navegador no soporta la geolocalización.");
    }
});







// Funcionalidad para exportar los datos del mapa a un archivo JSON
document.getElementById("exportarJson").addEventListener("click", function () {
    // Obtener los elementos guardados en el Local Storage
    const elementosGuardados = localStorage.getItem("mapElements");

    if (!elementosGuardados || elementosGuardados === "[]") {
        alert("No hay elementos para exportar.");
        return;
    }

    // Crear un archivo Blob con los datos en formato JSON
    const blob = new Blob([elementosGuardados], { type: "application/json" });

    // Crear un enlace temporal para descargar el archivo
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "mapa-datos.json";
    link.click();

    // Liberar el objeto URL
    URL.revokeObjectURL(link.href);
});










</script>


    </body>
</html>
