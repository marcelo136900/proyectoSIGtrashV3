<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Leaflet & Plugins -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-minimap/dist/Control.MiniMap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Figtree', sans-serif;
                background-color: #1f2937; /* Fondo oscuro */
            }

            .min-h-screen {
                min-height: 100vh;
                background: linear-gradient(135deg, #1f2937, #2b374b);
                color: #f3f4f6; /* Texto claro */
            }

            /* Header estilizado */
            header {
                background-color: #0f172a; /* Azul oscuro */
                color: #f8fafc;
                border-bottom: 1px solid #334155;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            }

            header div {
                display: flex;
                justify-content: space-between;
                align-items: center;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 1.2rem;
            }

            /* Main Content */
            main {
                padding: 2rem;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                margin: 2rem auto;
                max-width: 95%;
            }

            /* Navigation bar override */
            nav {
                background-color: #0f172a;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }

            nav a {
                color: #f8fafc !important;
            }

            nav a:hover {
                color: #93c5fd !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            <!-- Navigation Bar -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div class="container py-4 px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
