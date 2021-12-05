/**
* Gulp v4 対応
* XAMPPがなくても使える
* XAMPPで使用する場合は use_xampp と paths.proxy の２つを設定する
*/
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var wait = require('gulp-wait');
var postcss = require('gulp-postcss');
var mqpacker = require('css-mqpacker');

const use_xampp = false; // XAMPPを使う場合、trueにする
//setting : paths
const paths = {
  'proxy' : 'http://localhost/xxx/htdocs', // XAMPPを使う場合ディレクトリを入力
  'root' : './htdocs/',
  'html'    : './htdocs/*.html',
  'cssSrc'  : './htdocs/common/_sass/**/*scss',
  'cssDist'   : './htdocs/common/css',
}

//gulpコマンドの省略
const { watch, series, task, src, dest, parallel } = require('gulp');

if( use_xampp ) {
  task('server', function() {
    browserSync({
      proxy: paths.proxy
    });
  });
} else {
  task('server', function() {
    browserSync({
      server: {
        baseDir: paths.root
      }
    });
  });
}

task('html', function() {
  return src(paths.html)
    .pipe(browserSync.reload({
      stream: true
    }));
});

task('sass', function() {
  return src(paths.cssSrc)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(wait(100))
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer())
    .pipe(postcss([mqpacker()]))
    .pipe(sourcemaps.write('./'))
    .pipe(dest(paths.cssDist))
    .pipe(browserSync.reload({
      stream: true
    }));
});

// browser-sync reload
task('reload', (done) => {
  browserSync.reload();
  done();
});

task('watch', (done) => {
  watch(paths.cssSrc, series('sass', 'reload'));
  watch(paths.html, series('html', 'reload'));
  done();
});

task('default', parallel('server', 'watch'));