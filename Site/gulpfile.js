// GULP (compilação)

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', gulp.series( function() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass({outputStyle: 'compressed'})) // converter o Sass em CSS
    .pipe(gulp.dest('src/css'));
}));

gulp.task('watch', gulp.series( function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], gulp.parallel( ['sass'] ));
}));

gulp.task('default', gulp.series( ['sass', 'watch'] ));

// GULP SERVE (SERVIDOR WEB)
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;

gulp.task('serve', function () {
    browserSync.init({
        server: {
            baseDir: "src"
        }
    });

    gulp.watch("*.html").on("change", reload);
});