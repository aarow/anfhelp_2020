const webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const path = require("path");

module.exports = (env, argv) => {
  const devMode = argv.mode === "development";
  console.log("devMode: ", devMode);

  return {
    mode: devMode ? "development" : "production",
    entry: ["./assets/_src/js/index.js"],
    output: {
      path: path.resolve(__dirname, "dist"),
      filename: "js/[name].bundle.js",
    },
    devtool: devMode ? "source-map" : false,
    plugins: [
      new MiniCssExtractPlugin({
        filename: "./css/style.css",
      }),
      new webpack.HotModuleReplacementPlugin(),
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery",
      }),
      new BrowserSyncPlugin(
        {
          host: "localhost",
          port: 3000,
          proxy: "http://localhost:8000",
          files: ["dist/css/style.css"],
          cors: true,
          reloadDelay: 0,
          open: false,
          reloadOnRestart: false,
        },
        { injectCss: true, reload: false }
      ),
    ],
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"],
            },
          },
        },
        {
          test: /\.scss/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
              options: {
                publicPath: "../",
                hmr: devMode,
                sourceMap: devMode,
              },
            },
            {
              loader: "css-loader",
              options: {
                url: false,
                sourceMap: devMode,
                importLoaders: 2,
              },
            },
            // {
            //   loader: "postcss-loader",
            //   options: {
            //     sourceMap: devMode,
            //     plugins: [require("autoprefixer")({ grid: true })],
            //   },
            // },
            {
              loader: "sass-loader",
              options: {
                sourceMap: devMode,
              },
            },
          ],
        },
      ],
    },
    // devServer: {
    //   contentBase: path.join(__dirname, "dist"),
    //   hot: true,
    //   writeToDisk: true,
    //   port: 3000,
    //   proxy: {
    //     "/": {
    //       target: {
    //         host: "localhost",
    //         protocol: "http:",
    //         port: 8000,
    //       },
    //       changeOrigin: true,
    //       cookieDomainRewrite: "localhost",
    //       secure: false,
    //       autoRewrite: true,
    //       publicPath: path.join(__dirname, "dist"),
    //     },
    //   },
    // },
  };
};
