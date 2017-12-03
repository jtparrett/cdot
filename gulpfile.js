const gulp = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')

gulp.task('styles', function(){
  gulp.src('ui/stylesheets/*.{sass,scss,css}')
  .pipe(sass().on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp.dest('application/themes/giantjelly/app'))
})

gulp.task('default', function(){
  gulp.watch('ui/stylesheets/**/**.{sass,scss,css}', ['styles'])
})