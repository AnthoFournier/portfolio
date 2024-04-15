/**
 * Ce module exporte des constantes liées à la configuration de l'application.
 *
 * @module config/default
 */

/**
 * L'URL de base pour l'API prevision-meteo.ch.
 * Cette URL est utilisée comme base pour toutes les requêtes API.
 *
 * @constant
 * @type {string}
 */
export const API_URL = 'https://www.prevision-meteo.ch/services/json/';

/**
 * L'emplacement initial utilisé par l'application.
 * Cet objet contient la latitude et la longitude de l'emplacement initial.
 *
 * @constant
 * @type {Object}
 * @property {number} lat - La latitude de l'emplacement initial.
 * @property {number} lng - La longitude de l'emplacement initial.
 */
export const INITIAL_LOCATION = {
    lat: 45.4919543,
    lng: 4.2052002,
};
