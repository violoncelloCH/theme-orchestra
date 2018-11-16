// Gulp js verilerini çeker
var gulp = require('gulp');
// less js verilerini çeker
var less = require('gulp-less');
// Cssmin js verilerini çeker
var min = require('gulp-cssmin');
// Rename js verilerini çeker
var rename = require('gulp-rename');

// Less Dosyalarını Alır ve minify çevirerek assets'e gönderir...
gulp.task('lessConvert' , function(){
  gulp.src('build/less/theme.less')
  .pipe(less())
  .pipe(min())
  .pipe(rename('theme.min.css'))
  .pipe(gulp.dest('assets/css'))
})

// Watch bu işlemlerin hepsini kontrol eder ve işler.
gulp.task('default' , function(){
  /* Gulp komutu çalışınca css kontrol ederek minify çevirir. */
  gulp.watch('build/less/**/*.less', ['lessConvert']);
})
