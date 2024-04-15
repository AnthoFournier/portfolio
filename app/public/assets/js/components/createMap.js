import 'leaflet/dist/leaflet.css';
import L from 'leaflet';
import 'leaflet/dist/leaflet.js';
import { userLocation } from '../config/env.config.js';

export default function createMap() {
    console.log(userLocation);

    const map = L.map('map').setView([userLocation.lat, -userLocation.lng], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([userLocation.lat, -userLocation.lng]).addTo(map).bindPopup('A pretty CSS popup.<br> Easily customizable.').openPopup();
}
