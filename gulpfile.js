'use strict';

// Include gulp
var gulp = require('gulp'),
    eslint = require('gulp-eslint'),
    sass   =  require('gulp-sass'),
    concat  = require('gulp-concat'),
    uglify  = require('gulp-uglify'),
    rename  = require('gulp-rename'),
    livereload = require('gulp-livereload'),
    eslintThreshold = require('gulp-eslint-threshold');

// Lint Task
gulp.task('eslint', function() {
    var thresholdWarnings = 3;
 
    return gulp.src(['**/*.js', '!node_modules/**'])
        .pipe(eslint())
        .pipe(eslint.format())
        .pipe(eslintThreshold.afterWarnings(thresholdWarnings, function (numberOfWarnings) {
            throw new Error('ESLint warnings (' + numberOfWarnings + ') equal to or greater than the threshold (' + thresholdWarnings + ')');
        }));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(livereload());
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('/dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('/js/*.js', ['eslint', 'scripts']);
    gulp.watch('/sass/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['eslint', 'sass', 'scripts', 'watch']);