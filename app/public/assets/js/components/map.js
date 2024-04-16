import 'leaflet/dist/leaflet.css';
import { useLocation } from '../services/useLocation.js';
import cityCoordinates from '../data/cityCoordinates.json';
import { useFetchWeather } from '../services/useFetchWeather.js';
import { displayWeatherCard } from './weatherCard.js';
import L from 'leaflet';
import markerIconUrl from 'leaflet/dist/images/marker-icon.png';
import markerIconRetinaUrl from 'leaflet/dist/images/marker-icon-2x.png';
import markerShadowUrl from 'leaflet/dist/images/marker-shadow.png';

/**
 * Ce bloc de code corrige les icônes de marqueur Leaflet.
 *
 * Les icônes de marqueur par défaut de Leaflet ne sont pas correctement chargées lors du build.
 * Pour corriger cela, j'importe manuellement les images de marqueur et les définissons comme icônes de marqueur par défaut.
 *
 * @see {@link https://cescobaz.com/2023/06/14/setup-leaflet-with-svelte-and-vite/}
 */
L.Icon.Default.prototype.options.iconUrl = markerIconUrl;
L.Icon.Default.prototype.options.iconRetinaUrl = markerIconRetinaUrl;
displays.L.Icon.Default.prototype.options.shadowUrl = markerShadowUrl;
L.Icon.Default.imagePath = '';

/**
 * Cette fonction crée une carte Leaflet et l'ajoute à la div avec l'ID spécifié.
 *
 * Elle utilise d'abord le service useLocation pour obtenir la localisation actuelle de l'utilisateur.
 * Elle crée ensuite une nouvelle carte Leaflet, centrée sur la localisation de l'utilisateur, et l'ajoute à la div.
 * Elle ajoute également une couche de tuiles OpenStreetMap à la carte.
 *
 * Ensuite, pour chaque ville dans le fichier cityCoordinates.json, elle crée un marqueur à la position de la ville et l'ajoute à la carte.
 * Elle ajoute aussi un écouteur d'événements au marqueur, qui, lorsqu'il est cliqué, centre la carte sur le marqueur, récupère les données météorologiques pour la ville, crée une carte météorologique à partir des données, et affiche la carte météorologique dans une fenêtre contextuelle liée au marqueur.
 *
 * @function
 * @param {string} id - L'ID de la div où la carte doit être ajoutée.
 * @returns {Promise<void>} - Une promesse qui se résout une fois que la carte a été créée et ajoutée à la div.
 *
 */
export default async function createMap(id) {
    const location = await useLocation();
    let zoom = location.isGeolocationAvailable ? 12 : 9;

    const map = L.map(id).setView([location.lat, location.lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    for (const city in cityCoordinates) {
        const tempMarker = L.marker([cityCoordinates[city].lat, cityCoordinates[city].lng]).addTo(map);
        tempMarker.addEventListener('click', async function () {
            // Je positionne la carte sur le marqueur et je dézoome
            map.setView([cityCoordinates[city].lat, cityCoordinates[city].lng], 12);
            const response = await useFetchWeather(city);
            const weatherCardElement = displayWeatherCard(response);
            this.bindPopup(weatherCardElement).openPopup();
        });
    }
}
