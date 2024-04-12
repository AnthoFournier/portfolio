import { API_URL } from '../config/env.config.js';

/**
 * Fetch la météo d'une ville
 *
 * @param {string} endUrl - La ville correspondant à la fin de l'url
 * @returns {Promise<object>} - Les données de la météo ou une erreur
 */
export async function useFetchWeather(endUrl) {
    try {
        const response = await fetch(API_URL + endUrl);
        if (!response.ok) throw new Error('Error fetching weather', response.status, response.statusText);
        const data = await response.json();
        return data;
    } catch (e) {
        console.error(e);
        return e;
    }
}
