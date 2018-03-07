var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var browser = require('browser-sync');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('server', function() {
  browser({
    proxy: 'http://localhost/xxxx/htdocs'
  });
});

gulp.task('sass', function() {
  gulp.src('htdocs/common/_sass/**/*scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({
      outputStyle: 'expanded'
    }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('htdocs/common/css'))
    .pipe(browser.reload({
      stream: true
    }));
});

gulp.task('default', ['server'], function() {
  gulp.watch('htdocs/common/_sass/**/*.scss', ['sass']);
});