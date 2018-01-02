gulp = require 'gulp'
sass = require 'gulp-sass'
sassGlob = require 'gulp-sass-glob'
autoprefixer = require 'gulp-autoprefixer'
browser = require 'browser-sync'
plumber = require 'gulp-plumber'
sourcemaps = require 'gulp-sourcemaps'

gulp.task 'server', ->
  browser proxy: 'http://localhost/aeon-lp/htdocs'

gulp.task 'sass',->
  gulp.src 'htdocs/common/_sass/**/*scss'
    .pipe sourcemaps.init()
    .pipe sassGlob()
    .pipe sass(outputStyle: 'expanded')
    .pipe autoprefixer()
    .pipe plumber(errorHandler: (err) ->
      console.log err.messageFormatted
      @emit 'end'
      return
    )
    .pipe sourcemaps.write('./')
    .pipe gulp.dest 'htdocs/common/css'
    .pipe browser.reload(stream: true)
    
gulp.task 'default',['server'],->
  gulp.watch 'htdocs/common/_sass/**/*.scss',['sass']
  
