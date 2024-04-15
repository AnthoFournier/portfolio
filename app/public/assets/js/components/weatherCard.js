/**
 * Cette fonction affiche les données météorologiques dans le DOM.
 *
 * Elle sélectionne d'abord les éléments nécessaires du DOM en utilisant leurs ID et classes.
 * Elle met ensuite à jour le contenu textuel de ces éléments avec les propriétés correspondantes de l'objet de données météorologiques.
 * L'objet de données météorologiques est censé avoir une structure spécifique, avec des propriétés pour le nom de la ville, la date, la température, la condition, la vitesse et la direction du vent, l'humidité, la pression, et l'icône.
 * La fonction supprime également la classe 'd-none' du conteneur, le rendant visible dans le DOM.
 * Enfin, elle clone l'élément de la carte et le renvoie, permettant sa réutilisation ailleurs dans l'application.
 *
 * @function
 * @param {Object} datas - Les données météorologiques récupérées de l'API prevision-meteo.ch.
 * @returns {HTMLDivElement} - L'élément de la carte contenant les données météorologiques, cloné pour réutilisation.
 */
export function displayWeatherCard(datas) {
    // console.log(datas);

    const container = document.querySelector('#weather-result');
    const card = container.querySelector('#weather-result .card');
    const city = container.querySelector('#top h6');
    const date = container.querySelector('#top h6:last-child');
    const temp = container.querySelector('#center h6');
    const condition = container.querySelector('#center span');
    const wind = container.querySelector('#bottom i.fa-wind');
    const humidity = container.querySelector('#bottom i.fa-tint');
    const pressure = container.querySelector('#bottom i.fa-tachometer-alt');
    const img = container.querySelector('#bottom img');

    // Je fixe une taille au conteneur
    card.firstElementChild.style.width = '300px';
    // J'ajoute la classe 'small' à certains éléments pour les rendre plus petits
    // date.classList.add('small');
    wind.classList.add('small');
    wind.nextElementSibling.classList.add('small');
    humidity.classList.add('small');
    humidity.nextElementSibling.classList.add('small');
    pressure.classList.add('small');
    pressure.nextElementSibling.classList.add('small');

    city.textContent = datas.city_info.name;
    // J'enlève le .2024 pour la date
    date.innerText = datas.current_condition.date.slice(0, -5).replace(/\./g, '/');
    temp.textContent = datas.current_condition.tmp + '°C';
    condition.textContent = datas.current_condition.condition;
    wind.nextElementSibling.textContent = `${datas.current_condition.wnd_spd} km/h | ${datas.current_condition.wnd_dir}`;
    humidity.nextElementSibling.textContent = datas.current_condition.humidity + '%';
    pressure.nextElementSibling.textContent = datas.current_condition.pressure + 'hPa';
    img.src = datas.current_condition.icon_big;

    container.classList.remove('d-none');

    return card.cloneNode(true);
}
