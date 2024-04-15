export const API_URL = 'https://www.prevision-meteo.ch/services/json/';

export const getUserLocation = async () => {
    return new Promise((resolve, reject) => {
        if (!navigator.geolocation) {
            reject('Geolocation is not supported by your browser');
        } else {
            navigator.geolocation.getCurrentPosition(function (position) {
                resolve([position.coords.latitude, position.coords.longitude]);
            });
        }
    });
};

//TODO: créer une promesse pour récupérer la position de l'utilisateur
export const userLocation = {
    lat: 45.4919543,
    lng: 4.2052002,
};
