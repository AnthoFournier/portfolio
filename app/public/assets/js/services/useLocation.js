import { INITIAL_LOCATION } from '../config/default.js';

/**
 * Cette fonction est utilisée pour obtenir la localisation de l'utilisateur.
 * Elle renvoie une promesse qui se résout avec la latitude et la longitude de l'utilisateur.
 * Si le navigateur de l'utilisateur ne prend pas en charge la géolocalisation ou si l'utilisateur refuse la demande de géolocalisation,
 * la promesse se résout avec une latitude et une longitude par défaut définies dans le fichier de configuration.
 *
 * @async
 * @function
 * @returns {Promise<Object>} Une promesse qui se résout avec un objet contenant la latitude et la longitude.
 * L'objet a la forme { lat: number, lng: number }.
 * Si la géolocalisation n'est pas prise en charge ou autorisée, la promesse se résout avec des coordonnées par défaut.
 */
export function useLocation() {
    return new Promise(function (resolve) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    // Si la géolocalisation est prise en charge et autorisée, la promesse se résout avec les coordonnées de l'utilisateur
                    resolve({
                        isGeolocationAvailable: true,
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    });
                },
                (error) => {
                    // Si la géolocalisation n'est pas autorisée par l'utilisateur, la promesse se résout avec des coordonnées par défaut
                    console.log("La géolocalisation n'est pas prise en charge ou autorisée par l'utilisateur.", error);
                    resolve({
                        isGeolocationAvailable: false,
                        lat: INITIAL_LOCATION.lat,
                        lng: INITIAL_LOCATION.lng,
                    });
                }
            );
        } else {
            // Si la géolocalisation n'est pas prise en charge par le navigateur, la promesse se résout avec des coordonnées par défaut
            console.log("La géolocalisation n'est pas prise en charge par ce navigateur.");
            resolve({
                isGeolocationAvailable: false,
                lat: INITIAL_LOCATION.lat,
                lng: INITIAL_LOCATION.lng,
            });
        }
    });
}
