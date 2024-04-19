const path = require('path');
module.exports = {
    mode: 'development',
    entry: './app/public/assets/js/app-meteo.js',
    output: {
        path: path.resolve(__dirname, './app/public/assets/js'),
        filename: 'bundle.js',
        publicPath: '/assets/js/',
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif|woff|woff2|eot|ttf|otf)$/i,
                type: 'asset/resource',
                generator: {
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
