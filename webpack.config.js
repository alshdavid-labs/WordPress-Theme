const path = require('path');

module.exports = {
    entry: [
        "./src/js/index.js",
        "./src/scss/index.scss"
    ],
    output: {
        path: path.join(__dirname, ''),
        filename: "bundle.js"
    },
    module: {
        rules: [
             {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['env']
                    }
                }
            },
            {
                test: /\.scss$/,
                use: [{
                    loader: "style-loader"
                }, {
                    loader: "css-loader"
                }, {
                    loader: "postcss-loader"
                }, {
                    loader: "sass-loader"
                }]
            }
        ]
    }
};