require('require-dir')('./gulp')

const gulp = require('gulp');
const server = require('./gulp/server.js');
const argv = require('yargs').argv;
const run = require('run-sequence');

gulp.task('default', ['stylus'], function(){
	if(!argv.build){
		run('server');

		gulp.watch('src/stylus/**/*', ['stylus']);
		gulp.watch('*.html', function(){
        	server.reload();
        });
	}
});