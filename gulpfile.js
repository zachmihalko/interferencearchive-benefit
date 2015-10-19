var gulp    = require('gulp'),
	minifycss = require('gulp-minify-css'),
    less   = require('gulp-less');


// Handy file paths
var paths = {
	bootstrap: './bower_components/bootstrap',
	less: "./less/",
    css:  "./css/",
    img:  "./img/",
    js:   "./js/"
}

gulp.task('less', function () {
return gulp.src('./less/**/*.less')
	.pipe(less())
	.pipe(minifycss())
	.pipe(gulp.dest('./css'));
});

gulp.task('watch', function(){
  gulp.watch(['./less/**/*.less', './bower_components/bootstrap/**/*.less'], ['less']);
});

gulp.task('default', ['less']);