const path = require('path');

module.exports = {
    mode: 'development',
    entry: './app/public/assets/js/app-meteo.js',
    output: {
        path: path.resolve(__dirname, './app/public/assets/js'), // Le dossier de sortie pour bundle.js
        filename: 'bundle.js',
        publicPath: '/assets/js/', // Le chemin public doit correspondre au chemin de sortie
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
            {
                // Cette règle unique pour les images et les polices est suffisante
                test: /\.(png|svg|jpg|jpeg|gif|woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
                generator: {
                    // Ici, on définit le chemin relatif pour le dossier de sortie des assets
                    filename: '../img/[name].[contenthash][ext]',
                },
            },
            {
                test: /\.scss$/,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
        ],
    },
};
