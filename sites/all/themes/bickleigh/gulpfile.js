var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');

gulp.task('default', [ 'less' ]);

gulp.task('less', function(){
  return gulp.src('less/')
  .pipe(less())
  .pipe(gulp.dest('css/'));
});

gulp.task('watch', function(){
  return watch('less/**', ['less'])
  .pipe(less())
  .pipe(gulp.dest('css/'));
});

gulp.task('build', function() {
   gulp.src('vendor/twbs/bootstrap/dist/css/bootstrap.min.css')
   .pipe(gulp.dest('css'));
   gulp.src('vendor/fortawesome/font-awesome/**')
   .pipe(gulp.dest('css/font-awesome'));
});
