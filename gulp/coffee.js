const gulp = require('gulp'),
	server = require('./server.js'),
	uglify = require('gulp-uglify'),
	coffee = require('gulp-coffeeify'),
	rename = require('gulp-rename');

function showError(e) {
	console.log(e.toString());

	this.emit('end');
}

gulp.task('coffee', function(){
	gulp.src('src/coffee/index.coffee')
		.pipe(coffee())
		.on('error', showError)
		.pipe(uglify())
		.pipe(rename('script.js'))
		.pipe(gulp.dest('js'))
		.on('end', function(){
			server.reload();
		});
});