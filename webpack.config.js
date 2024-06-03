'use strict'

const path = require('path')
const autoprefixer = require('autoprefixer')
const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin')

module.exports = {
  mode: 'development',
  entry: './src/js/main.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist')
  },
  devServer: {
    static: path.resolve(__dirname, 'dist'),
    port: 8080,
    hot: true
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: './src/index.html',
      filename: 'index.html'
    }),
    new HtmlWebpackPlugin({
      template: './src/welcome.html',
      filename: 'welcome.html'
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
    })
  ],
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          'style-loader', // Adds CSS to the DOM by injecting a `<style>` tag
          'css-loader', // Interprets `@import` and `url()` like `import/require()` and will resolve them
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [
                  autoprefixer
                ]
              }
            }
          },
          'sass-loader' // Loads a SASS/SCSS file and compiles it to CSS
        ]
      },
      {
        test: /\.html$/,
        use: [
          {
            loader: 'html-loader',
            options: {
              sources: false
            }
          }
        ]
      }
    ]
  },
  resolve: {
    extensions: ['.js', '.scss']
  }
}
