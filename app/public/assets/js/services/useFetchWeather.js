import { API_URL } from '../config/default.js';

/**
 * Cette fonction récupère les données météorologiques pour une ville donnée.
 * Elle effectue une requête GET vers le point de terminaison de l'API, en ajoutant le nom de la ville à l'URL.
 * Si la réponse est réussie, elle renvoie les données météorologiques sous forme d'objet JSON.
 * Si la réponse n'est pas réussie, elle génère une erreur avec le statut et le texte de statut de la réponse.
 * Si une autre erreur se produit pendant l'exécution de la fonction, elle est capturée et enregistrée dans la console, et l'erreur est renvoyée.
 *
 * @async
 * @function
 * @param {string} endUrl - Le nom de la ville à ajouter à l'URL de l'API.
 * @returns {Promise<object> | Promise<Error>} - Une promesse qui se résout avec les données météorologiques pour la ville sous forme d'objet JSON, ou une erreur.
 * @throws {Error} - Si la réponse du réseau n'était pas correcte.
 */
export async function useFetchWeather(endUrl) {
    try {
        const response = await fetch(API_URL + endUrl);
        if (!response.ok) new Error("La réponse du réseau n'était pas correcte");
        const data = await response.json();
        return data;
    } catch (e) {
        console.error(e);
        return e;
    }
}
