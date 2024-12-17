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

                        <button id="ocultarMarcador" class="btn btn-info">Mostrar/Ocultar Marcadores por tipo</button>

                        <button id="clearElements" class="btn btn-danger btn-sm mt-3">Eliminar todos los elementos</button>


                        
                        <button id="toggleBasureros" class="btn btn-primary btn-sm">Mostrar/Ocultar Basureros</button>
                        <button id="toggleContenedores" class="btn btn-primary btn-sm">Mostrar/Ocultar Contenedores</button>
                    



                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#markerModal">
  Agregar Marcador
</button>

                    </div>


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
              <!-- Agrega más opciones aquí -->
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


                </div>
            </div>
        </div>
    </div>

    <!-- Agregar scripts de Leaflet -->
    @vite(['resources/js/app.js'])
</x-app-layout>