var gulp = require('gulp');

var plugins = require('gulp-load-plugins')();

// Scss 
gulp.task('css', function () {
  return gulp.src('./styles/scss/main.scss')
    .pipe(plugins.sass())
    .pipe(plugins.autoprefixer())
    .pipe(gulp.dest('./styles/css'));
});

// Minification 
gulp.task('minify', function () {
  return gulp.src(destination + '/styles/css/*.css')
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(destination + '/styles/css/'));
}); 

// Tasks 
gulp.task('build', ['css']);

gulp.task('prod', ['build',  'minify']);

gulp.task('watch', function () {
  gulp.watch('./styles/scss/**/*.scss', ['build']);
});

gulp.task('default', ['build']);