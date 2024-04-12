const btnWeather = document.querySelectorAll('#btn-weather');
import { useFetchWeather } from './services/useFetchWeather.js';
import { displayWeatherCard } from './components/weatherCard.js';

for (const button of btnWeather) {
    button.addEventListener('click', async function () {
        //je récupère la valeur de l'argument data-city
        const responseFormButton = await useFetchWeather(this.dataset.city);
        console.log(responseFormButton);
        displayWeatherCard(responseFormButton);
    });
}
