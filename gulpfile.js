var gulp    = require('gulp'),//gulp呼び出し
		sass   = require('gulp-sass');//gulpでsassを利用するプラグイン

gulp.task('sass', function() {
    gulp.src('sass/*.scss')
			.pipe(sass())
      .pipe(gulp.dest('public/css/'));
});

gulp.task('watch', function(){
	gulp.watch('sass/*.scss',['sass']);
});

gulp.task('browser-sync', function() {
	browserSync({
		port: 8888,
		browser: ["chrome"],
		proxy: {
			target: "http://localhost/chat_study/",
		}
	});
});

gulp.task('default', ['watch']);
