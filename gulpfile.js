var gulp 		= require('gulp');
var sass 		= require('gulp-sass');
var compass		= require('gulp-compass');
var concat		= require('gulp-concat');
var babel 		= require('gulp-babel');
var rename 		= require('gulp-rename');

var browserSync = require('browser-sync');
var reload  	= browserSync.reload;


//compile sass
gulp.task('sass', function(){

	var sourceSass = [
		'./css/scss/main.scss',
	];

	gulp.src( sourceSass )
		// .pipe( sass() )
		.pipe( compass({
			//project: path.join(__dirname, '/'),
			css: 'css',
			sass: 'css/scss',
			// image: 'images'
		}) )
		.pipe( rename('main.css') )
		.pipe( gulp.dest('css') )
		.pipe( reload({stream:true}) );
});

//minify and combine js
gulp.task('js', function(){

	var needScripts = [
		'js/src/*.js'
		// 'js/src/tether.min.js',
		// 'js/src/jquery-3.2.1.min.js',
		// 'js/src/bootstrap.min.js',
		// 'js/src/googleCharts_loader.js',
		// 'js/custom/*.js'
	];

	// gulp.src('js/src/**/*.js')
	gulp.src( needScripts )
			// .pipe( babel( {
           	// 	presets: ['es2015']
        	// }))
			.pipe( concat('main.js') )
			.pipe( gulp.dest('js') )
			.pipe( reload({stream:true}) );
});

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
        './scss/*.css',
        './src/*.js',
	    './**/*.php'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
	    //browsersync with a php server
	    proxy: "http://localhost:8888/ds/",
		//proxy: "http://localhost/ws/", 
	    notify: false
    });
});

//setting up a watch for automating tasks
gulp.task('watch', function(){

	gulp.watch('css/scss/**/*.scss', ['sass'] );

	gulp.watch('js/src/*.js', ['js'] );

	gulp.watch('**/*.php', function(){
		 browserSync.reload();
	});

});

gulp.task('default', ['sass', 'js', 'browser-sync', 'watch'] );