var gulp = require ('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-ruby-sass'),
	imagemin = require('gulp-imagemin'),
	browserSync = require('browser-sync').create(),
	reload = browserSync.reload;


// Show error function for Script and Style
function errorLog(error) {
	console.error.bind(error);
	this.emit('end');
}

// Script Minified
gulp.task('script', function(){
	gulp.src('script.js')
		.pipe(uglify())
	 	.on('error', errorLog)		
		.pipe(gulp.dest('compressed'));
});

// Browser sync
gulp.task('serve', function(){
	browserSync.init({
		server: {
			baseDir: "./"
		}
	});
});



// Style: SASS to CSS and Minified

gulp.task('styles', function() {
	
	 return sass('theme.scss', {
	  	style: 'compressed'
	 })
	 	.on('error', errorLog)
	  	.pipe(gulp.dest('compressed'));
});﻿

// Image compressed tasks
gulp.task('imagemin', function(){
	gulp.src('images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('compressed/images'));
});

// Watch Task
// Watches Scripts
gulp.task('watch', ['styles'], function(){
	gulp.watch('script.js', ['script']);
	gulp.watch('*.scss', ['styles']);
	gulp.watch('images/*', ['imagemin']);
	gulp.watch("*.php").on("change", reload);
});

gulp.task('default', ['script', 'styles', 'imagemin', 'watch']);
