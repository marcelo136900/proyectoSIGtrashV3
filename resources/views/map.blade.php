<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Interactivo</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        #map {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        // Inicializar el mapa
        const map = L.map('map').setView([-17.971258, -67.110665], 13);

        // Añadir capa base
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Cargar elementos desde el backend
        fetch('/api/map-elements')
            .then(response => response.json())
            .then(data => {
                data.forEach(element => {
                    if (element.tipo === 'marcador') {
                        const marker = L.marker(element.datos.coordinates);
                        marker.bindPopup(element.datos.popup).addTo(map);
                    } else if (element.tipo === 'ruta') {
                        const route = L.polyline(element.datos.coordinates, { color: 'blue' });
                        route.bindPopup(element.datos.popup).addTo(map);
                    } else if (element.tipo === 'forma') {
                        const polygon = L.polygon(element.datos.coordinates, { color: 'green' });
                        polygon.bindPopup(element.datos.popup).addTo(map);
                    }
                });
            })
            .catch(err => console.error('Error al cargar los elementos del mapa:', err));
    </script>
</body>
</html>
