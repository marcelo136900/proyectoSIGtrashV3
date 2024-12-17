import './bootstrap';

import Alpine from 'alpinejs';

import L, { popup } from "leaflet";
import "leaflet-draw";
import "leaflet-routing-machine";
import 'leaflet.heat';
import 'leaflet-minimap';
//import 'leaflet-minimap/dist/Control.MiniMap.css';

window.Alpine = Alpine;

Alpine.start();

L.GeometryUtil.readableArea = function (area, isMetric) {
    var areaStr;
    if (isMetric) {
        if (area >= 10000) {
            areaStr = (area / 1000000).toFixed(2) + " km²";
        } else {
            areaStr = area.toFixed(2) + " m²";
        }
    } else {
        area *= 0.836127; // Convertir a yardas cuadradas
        if (area >= 3097600) {
            areaStr = (area / 3097600).toFixed(2) + " mi²";
        } else {
            areaStr = Math.ceil(area) + " yd²";
        }
    }
    return areaStr;
};


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

        //ruta ficticia
const rutaFicticia = {
    type: "FeatureCollection",
    features: [
      {
        type: "Feature",
        properties: {},
        geometry: {
          coordinates: [
            [-67.06715901537021, -17.976461898873453],
            [-67.07125364757411, -17.975670432127345],
            [-67.07857694292532, -17.97430754746061],
            [-67.08499809319636, -17.97309608559371],
            [-67.09387446773287, -17.97142004974816],
            [-67.09397491493866, -17.971993327462897],
            [-67.0940297043238, -17.97259266126686],
            [-67.0932717844977, -17.972801124721414],
            [-67.09384303427444, -17.97520205736049],
            [-67.09485870443032, -17.978238331304183],
            [-67.09655148802268, -17.981458564796057],
            [-67.09887301780843, -17.984402724973037],
            [-67.10196839352068, -17.987254835151475],
            [-67.10491867349674, -17.989186883600198],
            [-67.10844933641842, -17.990566905254568],
            [-67.11265711277734, -17.99125691203335],
            [-67.11691328644348, -17.991394917023683],
            [-67.12073414083837, -17.99107291444757],
            [-67.1246517257241, -17.99029090574416],
            [-67.1278438374183, -17.98923289039348],
            [-67.13137450033997, -17.98753084926561],
            [-67.133937858352, -17.986196805555068],
            [-67.13446987605222, -17.98633481054354],
            [-67.13422804982518, -17.986932830918562],
            [-67.13503524029626, -17.98944158993568],
            [-67.1351276738799, -17.99016249143679],
          ],
          type: "LineString",
        },
      },
    ],
  };

  //agregar la ruta ficticia la mapa
  L.geoJSON(rutaFicticia, {
    style: {
      color: "blue",
      weight: 4,
      opacity: 0.8,
    },
  }).addTo(map);

  //centrar el mapa en la ruta ficticia
  const bounds = L.geoJSON(rutaFicticia).getBounds();
  map.fitBounds(bounds);

  //puntos de calor
  var heatLayer = L.heatLayer(
    [
      [-17.96998, -67.10615, 4.1], // Coordenadas en Oruro
      [-17.97077, -67.10639, 4.5],
      [-17.97201, -67.10452, 4.8],
    ],
    { radius: 30 }
  ).addTo(map);

  // 1. Resaltar área al pasar el mouse
  /*/ Zona campero, brasil, 6 de agosto y bolivar
  var polygonData1 = {
    type: "Feature",
    geometry: {
      type: "Polygon",
      coordinates: [
        [
          [-67.10396032679388, -17.97414561972981],
          [-67.10320876918982, -17.971663385332732],
          [-67.1063402592065, -17.970789630524337],
          [-67.10611061660525, -17.97001516242257],
          [-67.10817740001669, -17.969359840607467],
          [-67.10840704261794, -17.970193886132478],
          [-67.11117697148609, -17.969356302652002],
          [-67.11203259211464, -17.971733687191062],
          [-67.10999486403949, -17.972322673910256],
          [-67.10975844255016, -17.971401711992613],
          [-67.10768693997686, -17.972033535220817],
          [-67.10803244483998, -17.973058820294824],
          [-67.10396032679388, -17.97414561972981],
        ],
      ],
    },
    properties: { name: "zona campero, brasil, 6 de agosto y bolivar" },
  };

  var polygonLayer1 = L.geoJSON(polygonData1, {
    style: {
      color: "#3388ff",
      weight: 2,
    },
    onEachFeature: function (feature, layer) {
      layer.on({
        mouseover: function (e) {
          e.target.setStyle({
            weight: 5,
            color: "#FF5733",
            fillOpacity: 0.7,
          });
        },
        mouseout: function (e) {
          polygonLayer1.resetStyle(e.target);
        },
      });
    },
  }).addTo(map);*/
  var polygonLayer = L.geoJSON({
    "type": "Feature",
    "geometry": {
        "type": "Polygon",
        "coordinates": [
            [
              [-67.10396032679388, -17.97414561972981],
              [-67.10320876918982, -17.971663385332732],
              [-67.1063402592065, -17.970789630524337],
              [-67.10611061660525, -17.97001516242257],
              [-67.10817740001669, -17.969359840607467],
              [-67.10840704261794, -17.970193886132478],
              [-67.11117697148609, -17.969356302652002],
              [-67.11203259211464, -17.971733687191062],
              [-67.10999486403949, -17.972322673910256],
              [-67.10975844255016, -17.971401711992613],
              [-67.10768693997686, -17.972033535220817],
              [-67.10803244483998, -17.973058820294824],
              [-67.10396032679388, -17.97414561972981]
            ]
        ]
    }
  }, {
    style: { color: "#3388ff", weight: 2 },
    onEachFeature: function (feature, layer) {
        layer.bindPopup("Área: Zona 1");
        layer.on({
          mouseover: function (e) {
            e.target.setStyle({
              weight: 5,
              color: "#FF5733",
              fillOpacity: 0.7,
            });
          },
          mouseout: function (e) {
            polygonLayer.resetStyle(e.target);
          },
        });
    }
  }).addTo(map);

  /*/ Mercado Fermin Lopez
  var polygonData2 = {
    type: "Feature",
    geometry: {
      type: "Polygon",
      coordinates: [
        [
          [-67.11545675682623, -17.965169457942437],
          [-67.11634853058355, -17.96772661739095],
          [-67.11377660337182, -17.968562603797395],
          [-67.11283313258522, -17.96601775051556],
          [-67.11545675682623, -17.965169457942437],
        ],
      ],
    },
    properties: { name: "mercado fermin lopez" },
  };

  var polygonLayer2 = L.geoJSON(polygonData2, {
    style: {
      color: "#3388ff",
      weight: 2,
    },
    onEachFeature: function (feature, layer) {
      layer.on({
        mouseover: function (e) {
          e.target.setStyle({
            weight: 5,
            color: "#FF5733",
            fillOpacity: 0.7,
          });
        },
        mouseout: function (e) {
          polygonLayer2.resetStyle(e.target);
        },
      });
    },
  }).addTo(map);*/
  var polygonLayer2 = L.geoJSON({
    "type": "Feature",
    "geometry": {
        "type": "Polygon",
        "coordinates": [
            [
              [-67.11545675682623, -17.965169457942437],
          [-67.11634853058355, -17.96772661739095],
          [-67.11377660337182, -17.968562603797395],
          [-67.11283313258522, -17.96601775051556],
          [-67.11545675682623, -17.965169457942437]
            ]
        ]
    }
  }, {
    style: { color: "#3388ff", weight: 2 },
    onEachFeature: function (feature, layer) {
        layer.bindPopup("Área: Zona 1");
        layer.on({
          mouseover: function (e) {
            e.target.setStyle({
              weight: 5,
              color: "#FF5733",
              fillOpacity: 0.7,
            });
          },
          mouseout: function (e) {
            polygonLayer2.resetStyle(e.target);
          },
        });
    }
  }).addTo(map);

  //mini mapa
  var miniMapLayer = L.tileLayer(
    "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
  );
  var miniMap = new L.Control.MiniMap(miniMapLayer, {
    toggleDisplay: true,
  }).addTo(map);

  //Agregar un control de escala
  L.control
    .scale({
      metric: true,
      imperial: false,
    })
    .addTo(map);

  //agregar marcador con popup
  let puntoMouse;
  map.on("click", function (e) {
    var latlng = e.latlng;
    puntoMouse = L.marker([latlng.lat, latlng.lng])
      .addTo(map)
      .bindPopup(
        "Coordenadas: " + latlng.lat.toFixed(5) + ", " + latlng.lng.toFixed(5)
      )
      .openPopup();
  });

  // Crear marcadores individuales
const marcadorCampero = L.marker([-17.96678, -67.11470]).bindPopup("<b>Mercado Campero</b><br>Cantidad de basura: Media");
const marcadorBolivar = L.marker([-17.97222, -67.10506]).bindPopup("<b>Mercado Bolivar</b><br>Cantidad de basura: Alta");

// Añadir los marcadores a una capa de grupo
const puntoCriticoLayer = L.layerGroup([marcadorCampero, marcadorBolivar]).addTo(map);

// Añadir funcionalidad al marcador específico (Mercado Campero)
marcadorCampero.on("click", function () {
    map.setView(marcadorCampero.getLatLng(), 16);
});

  /*/ Añadir un marcador para mercado bolivar
  const puntoCritico2 = L.marker([-17.97222, -67.10506], {
    title: "Mercado campero",
  })
    .bindPopup("<b>Mercado Bolivar</b><br>Cantidad de basura: Alta")
    .addTo(map);*/

  /*/ Añadir popups y funcionalidades de zoom
  puntoCritico2.on("click", function () {
    map.setView(puntoCritico2.getLatLng(), 16);
  });*/

  //trazar ruta entre puntos
  /*map.on('click',function (e){
    var endMarker=L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
  });*/
  // Crear una capa de grupo para las rutas
  var routeLayer = L.layerGroup().addTo(map);
  // Agregar una ruta estática como una polilínea
  var staticRoute = L.polyline([
      [-17.96678, -67.11470],
      [-17.96850, -67.11230],
      [-17.97222, -67.10506]
  ], { color: 'blue', weight: 3 }).bindPopup("Ruta estática").addTo(routeLayer);
  // Configurar Routing Machine con interacción dinámica
  var dynamicRoute = L.Routing.control({
      waypoints: [
          L.latLng(-17.97300, -67.11500),
          L.latLng(-17.97500, -67.11000)
      ],
      routeWhileDragging: true,
      createMarker: function(i, waypoint, n) {
          return L.marker(waypoint.latLng, {
              draggable: true
          });
      }
  });
  // Eliminar la línea roja por defecto al encontrar una ruta
  dynamicRoute.on('routesfound', function(e) {
      // Eliminar rutas existentes para evitar duplicados
      routeLayer.clearLayers();
      // Agregar la nueva ruta al grupo
      var route = e.routes[0];
      var routeLine = L.polyline(route.coordinates, { color: 'green', weight: 3 });
      routeLine.bindPopup("Ruta dinámica").addTo(routeLayer);
  });
  // Agregar el control de rutas al mapa para interacción dinámica
  dynamicRoute.addTo(map);
  // Botón para alternar la visibilidad del grupo de rutas
  document.getElementById("toggleRoutes").addEventListener("click", function() {
      if (map.hasLayer(routeLayer)) {
          map.removeLayer(routeLayer);
      } else {
          map.addLayer(routeLayer);
      }
  });


  //agregar eventos a los botones
  document.getElementById("toggleHeat").addEventListener("click", function () {
    if (map.hasLayer(heatLayer)) {
        map.removeLayer(heatLayer);
    } else {
        map.addLayer(heatLayer);
    }
  });

  document.getElementById("toggleMarkers").addEventListener("click", function () {
    if (map.hasLayer(puntoCriticoLayer)) {
        map.removeLayer(puntoCriticoLayer);
    } else {
        map.addLayer(puntoCriticoLayer);
    }
  });

  document.getElementById("toggleMarkers").addEventListener("click", function () {
    if (map.hasLayer(puntoMouse)) {
        map.removeLayer(puntoMouse);
    } else {
        map.addLayer(puntoMouse);
    }
  });

  document.getElementById("togglePolygons").addEventListener("click", function () {
    if (map.hasLayer(polygonLayer)) {
        map.removeLayer(polygonLayer);
    } else {
        map.addLayer(polygonLayer);
    }
  });

  document.getElementById("togglePolygons").addEventListener("click", function () {
    if (map.hasLayer(polygonLayer2)) {
        map.removeLayer(polygonLayer2);
    } else {
        map.addLayer(polygonLayer2);
    }
  });

  //leaflet draw
  // Añadir capa base
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  // Crear una capa para las ediciones
  var drawnItems = new L.FeatureGroup();
  map.addLayer(drawnItems);

  // Configurar las herramientas de dibujo
  var drawControl = new L.Control.Draw({
      edit: {
          featureGroup: drawnItems
      },
      draw: {
          polygon: true,
          polyline: true,
          rectangle: true,
          circle: true,
          marker: true
      }
  });
  map.addControl(drawControl);

  /*/ Manejar eventos de dibujo
  map.on(L.Draw.Event.CREATED, function (event) {
      var layer = event.layer;

      // Agregar la geometría a la capa de elementos dibujados
      drawnItems.addLayer(layer);

      // Opcional: Mostrar las coordenadas en consola o popup
      if (layer instanceof L.Marker) {
          console.log("Coordenadas del marcador: ", layer.getLatLng());
          layer.bindPopup("Marcador en: " + layer.getLatLng().toString()).openPopup();
      } else if (layer instanceof L.Polygon || layer instanceof L.Polyline) {
          console.log("Coordenadas de la geometría: ", layer.getLatLngs());
          layer.bindPopup("Geometría creada").openPopup();
      }
  });*/
  // Manejar eventos de dibujo
map.on(L.Draw.Event.CREATED, function (event) {
    const layer = event.layer;

    // Serializar los datos
    const geoJSON = layer.toGeoJSON();

    // Verificar si es una polilínea (ruta) o cualquier otra geometría
    if (layer instanceof L.Polyline) {
        const rutaDescripcion = prompt("Escribe una descripción para la ruta (opcional):");

        // Asignar atributos adicionales
        geoJSON.properties = {
            id: Date.now(), // Asignar un ID único
            descripcion: rutaDescripcion || "Sin descripción",
            tipo: "ruta",
        };

        // Guardar en Local Storage
        let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
        elementosGuardados.push(geoJSON);
        localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

        // Vincular un popup con información
        layer.bindPopup(`<b>Descripción:</b> ${geoJSON.properties.descripcion}`).openPopup();
    } else if (layer instanceof L.Marker) {
        const popupContent = prompt("Escribe información para este marcador (opcional):");
        const tipo = prompt("Escribe el tipo (basureros, contenedores, etc.):");

        geoJSON.properties = {
            id: Date.now(),
            popup: popupContent || "Sin descripción",
            tipo: tipo || "Sin tipo",
        };

        let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
        elementosGuardados.push(geoJSON);
        localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

        layer.bindPopup(`
            <table>
                <tr><td><b>Descripción:</b></td><td>${geoJSON.properties.popup}</td></tr>
                <tr><td><b>Tipo:</b></td><td>${geoJSON.properties.tipo}</td></tr>
            </table>
        `).openPopup();
    }

    // Agregar el layer al mapa
    drawnItems.addLayer(layer);
});




  // Crear capas separadas para marcadores y formas
  var markersLayer = L.layerGroup().addTo(map);
  var shapesLayer = L.layerGroup().addTo(map);
  // Escucha el evento 'draw:created' de Leaflet Draw
  map.on(L.Draw.Event.CREATED, function (event) {
    var layer = event.layer;

    // Determina el tipo de dibujo
    if (layer instanceof L.Marker) {
        markersLayer.addLayer(layer); // Añadir a la capa de marcadores
    } else {
        shapesLayer.addLayer(layer); // Añadir a la capa de formas
    }
  });

  document.getElementById('toggle-markers').addEventListener('click', function () {
    if (map.hasLayer(markersLayer)) {
        map.removeLayer(markersLayer);
    } else {
        map.addLayer(markersLayer);
    }
  });

  // Mostrar/ocultar formas
  document.getElementById('toggle-shapes').addEventListener('click', function () {
    if (map.hasLayer(shapesLayer)) {
        // Desactivar edición y ocultar capa
        shapesLayer.eachLayer(function (layer) {
            if (layer.editing && layer.editing.enabled()) {
                layer.editing.disable(); // Desactiva los vértices si están habilitados
            }
        });
        map.removeLayer(shapesLayer); // Oculta la capa de formas
    } else {
        map.addLayer(shapesLayer); // Muestra la capa de formas
    }
  });


  /*/local storage
  map.on(L.Draw.Event.CREATED, function (event) {
    const layer = event.layer;

    // Serializar los datos y añadir propiedades personalizadas
    const geoJSON = layer.toGeoJSON();

    // Añade un popup con información
    const popupContent = prompt("Escribe información para este marcador (opcional):");
    if (popupContent) {
        geoJSON.properties = { popup: popupContent };
        console.log(geoJSON);
    }

    // Recuperar elementos existentes de Local Storage
    let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
    elementosGuardados.push(geoJSON);

    // Guardar de nuevo en Local Storage
    localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

    // Mostrar el popup inmediatamente en el mapa del dashboard
    if (popupContent) {
        layer.bindPopup(popupContent).openPopup();
    }

    drawnItems.addLayer(layer); // Agregar la capa al grupo de elementos dibujados
});*/


/*/eliminar
map.on(L.Draw.Event.CREATED, function (event) {
  const layer = event.layer;

  // Serializar los datos
  const geoJSON = layer.toGeoJSON();
  const popupContent = prompt("Escribe información para este marcador (opcional):");
  const tipo = prompt("Escribe el tipo:");
    if (popupContent && tipo) {
        geoJSON.properties = { id: Date.now(), popup:popupContent, tipo: tipo }; // Asignar un ID único
    }


  // Guardar en Local Storage
  let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
  elementosGuardados.push(geoJSON);
  localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

  // Agregar un popup con botón de eliminar
  layer.bindPopup(`
      <p>Información: ${geoJSON.properties.popup || "Sin descripción"}</p>
      <p>TIPO: ${geoJSON.properties.tipo || "Sin tipo"}</p>
      <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${geoJSON.properties.id})">Eliminar</button>
      `).openPopup();


      drawnItems.addLayer(layer);
});*/


/*
map.on(L.Draw.Event.CREATED, function (event) {
  const layer = event.layer;

  // Serializar los datos
  const geoJSON = layer.toGeoJSON();

  // Solicitar más información al usuario
  const popupContent = prompt("Escribe información para este marcador (opcional):");
  const tipo = prompt("Escribe el tipo (basureros, contenedores de basura, etc.):");
  const estado = prompt("Escribe el estado (lleno, vacío, en uso, etc.):");
  const capacidad = prompt("Escribe la capacidad (en kg o unidades):");

  // Asignar atributos adicionales
  if (popupContent && tipo) {
      geoJSON.properties = {
          id: Date.now(), // Asignar un ID único
          popup: popupContent,
          tipo: tipo,
          estado: estado || "Desconocido",
          capacidad: capacidad || "No especificada",
      };
  }

  // Guardar en Local Storage
  let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
  elementosGuardados.push(geoJSON);
  localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

  // Agregar un popup con la información y botón de eliminar
  layer.bindPopup(`
    <table>
        <tr><td><b>Información:</b></td><td>${geoJSON.properties.popup || "Sin descripción"}</td></tr>
        <tr><td><b>Tipo:</b></td><td>${geoJSON.properties.tipo || "Sin tipo"}</td></tr>
        <tr><td><b>Estado:</b></td><td>${geoJSON.properties.estado || "Desconocido"}</td></tr>
        <tr><td><b>Capacidad:</b></td><td>${geoJSON.properties.capacidad || "No especificada"}</td></tr>
    </table>
    <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${geoJSON.properties.id})">Eliminar</button>
`);

  // Añadir a la capa de elementos dibujados
  drawnItems.addLayer(layer);
});*/


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

// Usar íconos según el tipo SOLO para marcadores
map.on(L.Draw.Event.CREATED, function (event) {
  const layer = event.layer;

  // Verificar si es un marcador
  if (layer instanceof L.Marker) {
      // Solicitar información del marcador
      const tipo = prompt("Escribe el tipo (basureros, contenedores, etc.):");

      if (tipo && iconos[tipo]) {
          layer.setIcon(iconos[tipo]); // Asignar el ícono según el tipo
      }

      // Continuar con el flujo normal de almacenamiento y popup
      const geoJSON = layer.toGeoJSON();
      const popupContent = prompt("Escribe información para este marcador (opcional):");

      geoJSON.properties = {
          id: Date.now(),
          popup: popupContent || "Sin descripción",
          tipo: tipo || "Sin tipo",
      };

      // Guardar en Local Storage
      let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
      elementosGuardados.push(geoJSON);
      localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

      // Agregar el popup con la información
      layer.bindPopup(`
        <table>
            <tr><td><b>Descripción:</b></td><td>${geoJSON.properties.popup}</td></tr>
            <tr><td><b>Tipo:</b></td><td>${geoJSON.properties.tipo}</td></tr>
        </table>
      `).addTo(map);
  } else {
      console.log("El elemento creado no es un marcador.");
  }
});





// Declarar currentLatLng como variable global
let currentLatLng = null;

// Variable global para controlar si se está utilizando una herramienta de dibujo
let isDrawing = false;

// Detectar cuándo se inicia una herramienta de dibujo
map.on('draw:drawstart', function () {
    isDrawing = true; // Activar el indicador de dibujo
});

// Detectar cuándo se termina la herramienta de dibujo
map.on('draw:drawstop', function () {
    isDrawing = false; // Desactivar el indicador de dibujo
});

// Manejar el clic en el mapa para abrir el modal solo si no estás dibujando
map.on('click', function (e) {
    if (isDrawing) return; // Si se está dibujando, no abrir el modal

    currentLatLng = e.latlng; // Asignar la latitud y longitud al hacer clic
    const modal = new bootstrap.Modal(document.getElementById('markerModal'));
    modal.show();
});

// Manejar el guardado del marcador
document.getElementById("guardarMarcador").addEventListener("click", function () {
    if (!currentLatLng) {
        alert("Por favor, haga clic en el mapa para seleccionar una ubicación antes de agregar un marcador.");
        return;
    }

    const popupContent = document.getElementById("popupContent").value;
    const tipo = document.getElementById("tipo").value;
    const estado = document.getElementById("estado").value;
    const capacidad = document.getElementById("capacidad").value;

    if (!popupContent || !tipo) {
        alert("Debe completar al menos la descripción y el tipo para guardar el marcador.");
        return;
    }

    // Crear el marcador con el ícono según el tipo
    const marcador = L.marker(currentLatLng, { icon: iconos[tipo] }).bindPopup(`
      <table>
        <tr><td><b>Descripción:</b></td><td>${popupContent}</td></tr>
        <tr><td><b>Tipo:</b></td><td>${tipo}</td></tr>
        <tr><td><b>Estado:</b></td><td>${estado || "Desconocido"}</td></tr>
        <tr><td><b>Capacidad:</b></td><td>${capacidad || "No especificada"}</td></tr>
      </table>
    `);

    // Agregar el marcador al mapa
    marcador.addTo(map);

    // Convertir a GeoJSON y agregar propiedades adicionales
    const geoJSON = marcador.toGeoJSON();
    geoJSON.properties = {
        id: Date.now(),
        popupContent,
        tipo,
        estado: estado || "Desconocido",
        capacidad: capacidad || "No especificada",
    };

    // Guardar en Local Storage
    const elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
    elementosGuardados.push(geoJSON);
    localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

    // Reiniciar currentLatLng para evitar errores
    currentLatLng = null;

    // Cerrar el modal después de guardar
    const modal = bootstrap.Modal.getInstance(document.getElementById('markerModal'));
    modal.hide();
});






/*/ Cargar marcadores desde Local Storage al iniciar
const elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];

// Iterar sobre los elementos guardados y agregarlos al mapa
elementosGuardados.forEach(elemento => {
    const tipo = elemento.properties.tipo;

    const layer = L.geoJSON(elemento, {
        pointToLayer: function (geoJsonPoint, latlng) {
            // Asignar el icono correspondiente según el tipo
            const icon = iconos[tipo] || new L.Icon.Default; // Si no existe un ícono para el tipo, usar el predeterminado
            return L.marker(latlng, { icon });
        }
    });

    // Añadir el popup con la información y el botón de eliminar
    layer.bindPopup(`
        <table>
            <tr><td><b>Información:</b></td><td>${elemento.properties.popup || "Sin descripción"}</td></tr>
            <tr><td><b>Tipo:</b></td><td>${elemento.properties.tipo || "Sin tipo"}</td></tr>
            <tr><td><b>Estado:</b></td><td>${elemento.properties.estado || "Desconocido"}</td></tr>
            <tr><td><b>Capacidad:</b></td><td>${elemento.properties.capacidad || "No especificada"}</td></tr>
        </table>
        <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${elemento.properties.id})">Eliminar</button>
    `);

    // Agregar al mapa y a la capa de elementos dibujados
    layer.addTo(drawnItems);
});*/
// Crear grupos de capas
const contenedoresLayer = L.layerGroup().addTo(map);
const basurerosLayer = L.layerGroup().addTo(map);
const rutasLayer = L.layerGroup().addTo(map);

// Función para agregar elementos al mapa y a las capas
// Función para agregar elementos al mapa y a las capas
function agregarElementoMapa(elemento) {
  const tipo = elemento.properties.tipo;

  // Manejar Marcadores (Point)
  if (elemento.geometry.type === "Point") {
      const icon = iconos[tipo] || new L.Icon.Default();
      const marker = L.geoJSON(elemento, {
          pointToLayer: function (geoJsonPoint, latlng) {
              return L.marker(latlng, { icon });
          }
      }).bindPopup(`
          <table>
              <tr><td><b>Información:</b></td><td>${elemento.properties.popup || "Sin descripción"}</td></tr>
              <tr><td><b>Tipo:</b></td><td>${elemento.properties.tipo || "Sin tipo"}</td></tr>
              <tr><td><b>Estado:</b></td><td>${elemento.properties.estado || "Desconocido"}</td></tr>
              <tr><td><b>Capacidad:</b></td><td>${elemento.properties.capacidad || "No especificada"}</td></tr>
          </table>
          <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${elemento.properties.id})">Eliminar</button>
      `);

      // Añadir a la capa según el tipo
      if (tipo === "contenedores") {
          contenedoresLayer.addLayer(marker);
      } else if (tipo === "basureros") {
          basurerosLayer.addLayer(marker);
      }
  }
  // Manejar Rutas o Líneas (LineString)
  else if (elemento.geometry.type === "LineString") {
    const ruta = L.geoJSON(elemento, {
        style: { color: "blue", weight: 4 }
    }).bindPopup(`
        <table>
            <tr><td><b>Tipo:</b></td><td>${elemento.properties.tipo || "Ruta"}</td></tr>
            <tr><td><b>Información:</b></td><td>${elemento.properties.popup || "Ruta guardada"}</td></tr>
        </table>
        <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${elemento.properties.id})">Eliminar</button>
    `);

    rutasLayer.addLayer(ruta); // Añadir la ruta a la capa de rutas
}
}


// Cargar elementos desde Local Storage
const elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
elementosGuardados.forEach(agregarElementoMapa);

// Botón para mostrar/ocultar basureros
document.getElementById('toggleBasureros').addEventListener('click', function () {
    if (map.hasLayer(basurerosLayer)) {
        map.removeLayer(basurerosLayer);
    } else {
        map.addLayer(basurerosLayer);
    }
});

// Botón para mostrar/ocultar contenedores
document.getElementById('toggleContenedores').addEventListener('click', function () {
    if (map.hasLayer(contenedoresLayer)) {
        map.removeLayer(contenedoresLayer);
    } else {
        map.addLayer(contenedoresLayer);
    }
});








document.getElementById('ocultarMarcador').addEventListener('click', function () {
  if (map.hasLayer(markersLayer)) {
      map.removeLayer(markersLayer);
  } else {
      map.addLayer(markersLayer);
  }
});




// Función para eliminar un elemento específico
window.eliminarElemento = function(id) {
  let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];

  // Filtrar los elementos para eliminar el seleccionado
  elementosGuardados = elementosGuardados.filter((elem) => elem.properties.id !== id);
  localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

  // Recargar el mapa para reflejar los cambios
  location.reload();
};

//-----------------------
map.on(L.Draw.Event.CREATED, function (event) {
  const layer = event.layer;

  // Convertir a GeoJSON
  const geoJSON = layer.toGeoJSON();

  // Determinar si es un marcador o una forma (ruta, polígono, etc.)
  let tipo = "ruta"; // Valor predeterminado para líneas y polígonos
  let popupContent = "";

  if (layer instanceof L.Marker) {
      // Solicitar información solo para marcadores
      popupContent = prompt("Escribe información para este marcador (opcional):");
      tipo = prompt("Escribe el tipo (basureros, contenedores, etc.):") || "Sin tipo";

      if (popupContent) {
          geoJSON.properties = {
              id: Date.now(),
              popup: popupContent,
              tipo: tipo,
          };
      }

      // Asignar ícono para marcadores si existe
      if (iconos[tipo]) {
          layer.setIcon(iconos[tipo]);
      }
  } else {
      // Para líneas o polígonos, asignar propiedades predeterminadas
      geoJSON.properties = {
          id: Date.now(),
          tipo: tipo,
          popup: "Ruta o forma guardada",
      };
  }

  // Guardar en Local Storage
  let elementosGuardados = JSON.parse(localStorage.getItem('mapElements')) || [];
  elementosGuardados.push(geoJSON);
  localStorage.setItem('mapElements', JSON.stringify(elementosGuardados));

  // Asignar popup para rutas/polígonos
  layer.bindPopup(`
      <table>
          <tr><td><b>Tipo:</b></td><td>${geoJSON.properties.tipo}</td></tr>
          <tr><td><b>Información:</b></td><td>${geoJSON.properties.popup}</td></tr>
      </table>
      <button class="btn btn-danger btn-sm" onclick="eliminarElemento(${geoJSON.properties.id})">Eliminar</button>
  `);

  // Añadir la capa al mapa
  drawnItems.addLayer(layer);
});










        // Forzar el redimensionamiento al cargar
        setTimeout(() => {
            map.invalidateSize();
        }, 500);
    }
});