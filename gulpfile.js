require('require-dir')('./gulp')

const gulp = require('gulp');
const server = require('./gulp/server.js');
const argv = require('yargs').argv;
const run = require('run-sequence');

gulp.task('default', ['stylus', 'coffee'], function(){
	if(!argv.build){
		run('server');

		gulp.watch('src/stylus/**/*', ['stylus']);
		gulp.watch('src/coffee/**/*', ['coffee']);
		gulp.watch('*.{php, html}', function(){
        	server.reload();
        });
	}
});