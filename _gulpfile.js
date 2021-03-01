/**
* Gulp v4 対応
* XAMPPで使用する前提
* 
*/
var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var browser = require('browser-sync');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var wait = require('gulp-wait');
var postcss = require('gulp-postcss');
var mqpacker = require('css-mqpacker');

gulp.task('server', function() {
  browser({
    proxy: 'http://localhost/xxxx/htdocs'
  });
});

gulp.task('html', function() {
  gulp.src('htdocs/*.html')
    .pipe(browser.reload({
      stream: true
    }));
});

gulp.task('sass', function() {
  gulp.src('htdocs/common/_sass/**/*scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(wait(100))
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer())
    .pipe(postcss([mqpacker()]))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('htdocs/common/css'))
    .pipe(browser.reload({
      stream: true
    }));
});

gulp.task('default', gulp.series( gulp.parallel('server'), function() {
  gulp.watch('htdocs/common/_sass/**/*.scss', gulp.series('sass'));
}));