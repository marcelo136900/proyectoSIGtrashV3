import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Asegúrate de que el script Leaflet se cargue solo si existe un elemento con el ID "map"
document.addEventListener('DOMContentLoaded', () => {
    const mapContainer = document.getElementById('map');

    if (mapContainer) {
        // Inicializar el mapa
        const map = L.map('map').setView([-17.9647, -67.1067], 13);

        // Cargar las baldosas del mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Forzar el redimensionamiento al cargar
        setTimeout(() => {
            map.invalidateSize();
        }, 500);
    }
});