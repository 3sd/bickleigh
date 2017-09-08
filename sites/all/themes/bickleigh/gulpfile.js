var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var plumber = require('gulp-plumber');

gulp.task('styles', function () {
  return gulp.src('less/*.less')
    .pipe(watch('less/*.less'))
    .pipe(plumber())
    .pipe(less())
    .pipe(gulp.dest('css'));
});
// gulp.task('build', function() {
//   gulp.src('vendor/twbs/bootstrap/dist/css/bootstrap.min.css')
//     .pipe(gulp.dest('css'));
//   gulp.src('vendor/fortawesome/font-awesome/**')
//     .pipe(gulp.dest('css/font-awesome'));
// });
