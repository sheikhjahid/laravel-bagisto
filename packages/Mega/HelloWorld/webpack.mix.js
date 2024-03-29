const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
  var publicPath = "publishable/assets";
} else {
  var publicPath = "../../../public/vendor/webkul/helloworld/assets";
}

mix.setPublicPath(publicPath).mergeManifest();

mix.disableNotifications();

mix
  .sass(__dirname + "/src/Resources/assets/sass/app.scss", "css/helloworld.css")
  .options({
    processCssUrls: false
  });

if (mix.inProduction()) {
  mix.version();
}

mix
  .js(__dirname + "/src/Resources/assets/js/app.js", "js/helloworld.js")
  .copyDirectory(
    __dirname + "/src/Resources/assets/images",
    publicPath + "/images"
  );