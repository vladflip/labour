const gulp = require('gulp');
const server = require('./server.js');
const rupture = require('rupture');
const stylus = require('gulp-stylus');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const argv = require('yargs').argv;
const notifier = require('node-notifier');

const conf = {
	compress: true,
	use: [rupture()]
}

gulp.task('stylus', function(){
	gulp.src('src/stylus/main.styl')
		.pipe(stylus(conf).on('error', function(e){
			console.log(e.message);
			notifier.notify({
				title: 'stylus error',
				message: e.message + e.filename
			})
		}))
		.pipe(autoprefixer())
		.pipe(rename('style.css'))
		.pipe(gulp.dest('css'))
		.pipe(gulpif(!argv.build, server.stream()));
})