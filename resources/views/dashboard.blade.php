<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mapa Admin') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-900 text-gray-100 overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 p-4 shadow-lg flex-shrink-0">
            <h3 class="text-xl font-bold text-center mb-4">Controles</h3>
            <div class="space-y-3">
                <button id="toggleHeat" class="btn btn-primary w-full">Mostrar/Ocultar Puntos de Calor</button>
                <button id="toggleMarkers" class="btn btn-secondary w-full">Mostrar/Ocultar Marcadores</button>
                <button id="togglePolygons" class="btn btn-success w-full">Mostrar/Ocultar Áreas</button>
                <button id="toggleRoutes" class="btn btn-warning w-full">Mostrar/Ocultar Rutas</button>
                <button id="toggle-markers" class="btn btn-primary w-full">Mostrar/Ocultar Marcadores</button>
                <button id="toggle-shapes" class="btn btn-secondary w-full">Mostrar/Ocultar Formas</button>
                <button id="ocultarMarcador" class="btn btn-info w-full">Mostrar/Ocultar Marcadores por tipo</button>
                <button id="clearElements" class="btn btn-danger btn-sm w-full mt-3">Eliminar todos los elementos</button>
                <button id="toggleBasureros" class="btn btn-primary btn-sm w-full">Mostrar/Ocultar Basureros</button>
                <button id="toggleContenedores" class="btn btn-primary btn-sm w-full">Mostrar/Ocultar Contenedores</button>
                <button type="button" class="btn btn-success w-full" data-bs-toggle="modal" data-bs-target="#markerModal">
                    Agregar Marcador
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow p-4 bg-gray-100 dark:bg-gray-900">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
                <!-- Contenedor del mapa -->
                <div id="map" class="rounded-lg" style="height: 700px; width: 100%;"></div>
            </div>
        </main>
    </div>

    <!-- Modal para Agregar Marcador -->
    <div id="markerModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Marcador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="markerForm">
                        <div class="mb-3">
                            <label for="popupContent" class="form-label">Descripción:</label>
                            <input type="text" class="form-control" id="popupContent" placeholder="Información del marcador">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <select class="form-select" id="tipo">
                                <option value="basureros">Basureros</option>
                                <option value="contenedores">Contenedores</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <input type="text" class="form-control" id="estado" placeholder="Ejemplo: lleno, vacío">
                        </div>
                        <div class="mb-3">
                            <label for="capacidad" class="form-label">Capacidad:</label>
                            <input type="text" class="form-control" id="capacidad" placeholder="Ejemplo: 50kg">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="guardarMarcador">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
