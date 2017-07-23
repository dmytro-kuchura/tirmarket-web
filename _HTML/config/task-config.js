module.exports = {
    html: true,
    images: true,
    fonts: true,
    static: true,
    svgSprite: true,
    ghPages: true,
    stylesheets: true,

    javascripts: {
        babel: {
            presets: [
                ["stage-2"],
                ["es2015",  {"modules": false}]
            ]
        },
        entry: {
            bundle: ['./bundle.js']
        },
        publicPath: '/Media/js/',
        loaders: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            }
        ],

        customizeWebpackConfig: function (webpackConfig, env, webpack) {
            webpackConfig.output.chunkFilename = '[name].js';

            webpackConfig.resolve = {
                alias: {
                    'vue$': 'vue/dist/vue.esm.js'
                }
            };

            return webpackConfig;
        }
    },

    browserSync: {
        proxy: {
            target: 'tirmarket.loc'
        }
    },

    production: {
        rev: false
    }
};

