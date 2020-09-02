var 	gulp          = require('gulp'),
		sass          = require('gulp-sass'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		
		sourcemaps = require('gulp-sourcemaps'),
		browserSync  = require('browser-sync').create();

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: "http://start-template-scss/app/",
		notify: false
	});
});

gulp.task('style', function() {
	return gulp.src('app/scss/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(autoprefixer(['last 2 versions']))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest('app/css'))
});


gulp.task('watch', function() {
	gulp.watch('app/scss/**/*.scss', gulp.parallel('style')).on("change", browserSync.reload);
	gulp.watch('app/js/*.js').on("change", browserSync.reload);
	gulp.watch('app/*.php').on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('watch', 'style', 'browser-sync'));