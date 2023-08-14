const browserSync = require("browser-sync");
const {dest, parallel, src, series, watch } = require("gulp");
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require("gulp-sass-glob");

const TARGET_BROWSERS = [
  'last 2 versions',
  'ie >= 11'
];

const srcPath = {
  css: "./assets/scss/**/*.scss",
  scss: "./assets/scss/**/*.scss",
  js: "./assets/js/**/*.js",
  img: "./assets/images/**/*",
  php: "./**/*.php",
};

const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};

const browserSyncOption = {
  proxy: "http://localhost:8000/",
  open: true,
  reloadOnRestart: true,
};

const browserSyncReload = (done) => {
  conversionCss();
  browserSync.reload();
  done();
};

const watchFiles = () => {
  watch(srcPath.scss, series(browserSyncReload));
  watch(srcPath.js, series(browserSyncReload));
  watch(srcPath.img, series(browserSyncReload));
  watch(srcPath.php, series(browserSyncReload));
};


const conversionCss = () =>{
  return src(srcPath.css)
    .pipe(sassGlob())
    .pipe(plumber())
    .pipe(sass({outputStyle: "expanded"}))
    .pipe(autoprefixer(TARGET_BROWSERS))
    .pipe(dest("./assets/css"))
}

exports.default = series(parallel(watchFiles, browserSyncFunc));
exports.build = parallel(conversionCss);
