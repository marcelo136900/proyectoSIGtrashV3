<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <!-- Contenedor del mapa -->
                    <div id="map" style="height: 500px; width: 100%;"></div>
                    
                    <!-- Botones de control -->
                    <div class="button-group mt-3">
                        <button id="toggleHeat" class="btn btn-primary">Mostrar/Ocultar Puntos de Calor</button>
                        <button id="toggleMarkers" class="btn btn-secondary">Mostrar/Ocultar Marcadores</button>
                        <button id="togglePolygons" class="btn btn-success">Mostrar/Ocultar Áreas</button>
                        <button id="toggleRoutes" class="btn btn-warning">Mostrar/Ocultar Rutas</button>
                        <button id="toggle-markers" class="btn btn-primary">Mostrar/Ocultar Marcadores</button>
                        <button id="toggle-shapes" class="btn btn-secondary">Mostrar/Ocultar Formas</button>

                        <button id="clearElements" class="btn btn-danger btn-sm mt-3">Eliminar todos los elementos</button>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Agregar scripts de Leaflet -->
    @vite(['resources/js/app.js'])
</x-app-layout>