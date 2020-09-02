var 	gulp          = require('gulp'),
		sass          = require('gulp-sass'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		
		sourcemaps = require('gulp-sourcemaps'),
		browserSync  = require('browser-sync').create();

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: "start-template",
		notify: false
	});
});

gulp.task('style', function() {
	return gulp.src('app/sass/*.sass')
	.pipe(sourcemaps.init())
	.pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
	.pipe(autoprefixer(['last 2 versions']))
	.pipe(sourcemaps.write('./maps'))
	.pipe(gulp.dest('app/css'))
});


gulp.task('watch', function() {
	gulp.watch('app/sass/**/*.sass', gulp.parallel('style')).on("change", browserSync.reload);
	gulp.watch('app/js/*.js').on("change", browserSync.reload);
	gulp.watch('app/*.php').on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('watch', 'style', 'browser-sync'));