/**
 * Affiche les données météo dans le DOM
 *
 * @param {Object} datas - Les données récupérées de l'API prevision-meteo.ch
 *
 * @returns {void}
 */
export function displayWeatherCard(datas) {
    const container = document.querySelector('#weather-result');
    const city = container.querySelector('#top h6');
    const date = container.querySelector('#top h6:last-child');
    const temp = container.querySelector('#center h6');
    const condition = container.querySelector('#center span');
    const wind = container.querySelector('#bottom i.fa-wind').nextElementSibling;
    const humidity = container.querySelector('#bottom i.fa-tint').nextElementSibling;
    const pressure = container.querySelector('#bottom i.fa-tachometer-alt').nextElementSibling;
    const img = container.querySelector('#bottom img');

    const time = new Date();
    const hours = time.getHours();
    const minutes = time.getMinutes();

    city.textContent = datas.city_info.name;
    // date.textContent = `${hours}:${minutes}`;
    date.innerText = datas.current_condition.date;
    temp.textContent = datas.current_condition.tmp + '°C';
    condition.textContent = datas.current_condition.condition;
    wind.textContent = `${datas.current_condition.wnd_spd} km/h - ${datas.current_condition.wnd_dir}`;
    humidity.textContent = datas.current_condition.humidity + '%';
    pressure.textContent = datas.current_condition.pressure + ' hPa';
    img.src = datas.current_condition.icon_big;

    container.classList.remove('d-none');
}
