/**
 * Génère une carte météo sous forme d'élément DOM pour affichage dans une popup Leaflet.
 *
 * @param {Object} datas - Les données météorologiques récupérées de l'API.
 * @returns {HTMLElement} - Un nouvel élément DOM contenant la carte météo.
 */
export function displayWeatherCard(datas) {
    // Créer l'élément de base de la carte météo
    const card = document.createElement('div');
    card.className = 'card bg-dark rounded-4';
    card.style.width = '300px';

    card.innerHTML = `
        <div class="card-body p-4">
            <div id="top" class="d-flex">
                <h6 class="flex-grow-1 text-white">${datas.city_info.name}</h6>
                <h6 class="text-white">${datas.current_condition.date.slice(0, -5).replace(/\./g, '/')}</h6>
            </div>
            <div id="center" class="d-flex flex-column text-center mt-5 mb-4">
                <h6 class="display-4 mb-0 fw-bold text-white">${datas.current_condition.tmp}°C</h6>
                <span class="small text-white">${datas.current_condition.condition}</span>
            </div>
            <div id="bottom" class="d-flex align-items-center">
                <div class="flex-grow-1 small" style="font-size: 1rem;">
                    <div><i class="fas fa-wind fa-fw" style="color: #F1F1F1;"></i> <span class="ms-1 text-white">${datas.current_condition.wnd_spd} km/h | ${datas.current_condition.wnd_dir}</span></div>
                    <div><i class="fas fa-tint fa-fw" style="color: #F1F1F1;"></i> <span class="ms-1 text-white">${datas.current_condition.humidity}%</span></div>
                    <div><i class="fas fa-tachometer-alt" style="color: #F1F1F1;"></i> <span class="ms-1 text-white">${datas.current_condition.pressure} hPa</span></div>
                </div>
                <div>
                    <img src="${datas.current_condition.icon_big}" width="100px">
                </div>
            </div>
        </div>
    `;
    return card;
}
