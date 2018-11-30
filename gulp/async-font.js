var gulp                        = require('gulp');
cnf                         = require('../package.json').config;
plumber                     = require('gulp-plumber');
notify                      = require("gulp-notify");
sourcemaps                  = require('gulp-sourcemaps');
babel                       = require('gulp-babel');
include                     = require("gulp-include");
uglify                      = require('gulp-uglify');

gulp.task('asyncFonts', function () {
    return gulp.src(cnf.src.asyncFonts)
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(babel())
        .pipe(uglify())
        .pipe(gulp.dest(cnf.dist.js));
});

gulp.task('asyncFonts:watch', function () {
    gulp.watch(cnf.src.asyncFonts, ['asyncFonts', 'bs-reload']);
});