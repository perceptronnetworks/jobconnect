const path = require('path');
const HtmlWebPackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const loader = require('sass-loader');


var config = {
    mode: 'development',
    entry: './src/index.js',
    devtool: 'inline-source-map',
    devServer: {
        // contentBase: __dirname + './dist'
        contentBase: path.join(__dirname, 'dist'),
        compress: true,
        port: 9000,
        inline: false,
    },
    module:{
        rules: [
            {
                //for js
                test: /\.m?js$/, 
                exclude: /node_modules/,
                use: {
                  loader: "babel-loader",
                  options: {
                    presets: ['@babel/preset-env']
                  }
                }
            },
            {
                //for css & sass
                // test: /\.s[ac]ss$/i,
                // test: /\.(sa|sc)ss$/,
                test: /\.(scss|css)$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        // options: {
                        //     hmr: process.env.NODE_ENV === 'development'
                        // }
                    },
                    
                  // Creates `style` nodes from JS strings
                //   "style-loader",
                  // Translates CSS into CommonJS
                //   "style-loader",
                //   "css-loader",
                //   "postcss-loader",
                //   // Compiles Sass to CSS
                  
                //   "sass-loader",
                //   "import-glob-loader",

                  {loader: 'css-loader', options: {sourceMap: true}},
                  {loader: 'postcss-loader', options: {sourceMap: true}},
                  {loader: 'sass-loader', options: {sourceMap: true}},
                  {loader: 'import-glob-loader', options: {sourceMap: true}},
                ],
              },
            //   {
            //       test: /\.css$/,
            //       use: [
            //           'style-loader',
            //           'css-loader',
            //           {
            //               loader: 'postcss-loader'
            //           }
            //       ]
            //   }


        ]
    },
    plugins: [
        new HtmlWebPackPlugin({
            title: 'Development'
        }),
        new MiniCssExtractPlugin({
            filename: '[name].css'
        }),
    ],
    output: {   
        filename: '[name].js',
        path: path.resolve(__dirname,'dist'),
    }
}

module.exports = (env, options) => {
   if(options.mode === 'development'){
       config.mode = 'development';
   }else{
       config.mode = 'production';
   }

   return config;
}