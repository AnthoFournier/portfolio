const path = require('path');

module.exports = {
    mode: 'development', // Utilisez 'production' pour la build finale
    entry: './app/public/assets/js/app-meteo.js', // Point d'entrée de votre application
    output: {
        path: path.resolve(__dirname, 'app/public/assets/js'), // Chemin de sortie
        filename: 'bundle.js', // Nom du fichier de sortie
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
            },
            {
                test: /\.scss$/,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
            },
        ],
    },
};
