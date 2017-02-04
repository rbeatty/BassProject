var concat = require('gulp-concat'),
gulp = require('gulp'),
pleeease = require('gulp-pleeease'),
pleeeaseOptions = {
	autoprefixer: { browsers: ['last 2 versions'], cascade: false },
	filters: { oldIE: false },
	import: true,
	minifier: { removeAllComments: true },
	mqpacker: true,
	next: false,
	opacity: false,
	pseudoElements: true,
	rebaseUrls: false,
	rem: false,
	sourcemaps: false
},
sass = require('gulp-sass'),
uglify = require('gulp-uglify');

gulp.task('concat', function() {
	gulp.src('assets/js/*.js')
	.pipe(concat('script.js'))
	.pipe(uglify())
	.pipe(gulp.dest('assets/'))
});

gulp.task('default', function() {
	gulp.watch('assets/css/*.scss',['styles']);
	gulp.watch('assets/js/*.js', ['concat']);
});

gulp.task('styles', function() {
	gulp.src('assets/css/*.scss')
	.pipe(sass({outputStyle: 'compressed'}))
	.pipe(pleeease(pleeeaseOptions))
	.pipe(gulp.dest('assets/'));
});