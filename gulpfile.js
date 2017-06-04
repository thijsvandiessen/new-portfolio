'use strict';

// Include gulp
var gulp            = require('gulp'),
    eslint          = require('gulp-eslint'),
    sass            = require('gulp-sass'),
    concat          = require('gulp-concat'),
    uglify          = require('gulp-uglify'),
    rename          = require('gulp-rename'),
    pump            = require('pump'),
    livereload      = require('gulp-livereload'),
    cleanCSS        = require('gulp-clean-css'),
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

// Concatenate js
var jsFiles = 'javascript/*.js',  
    jsDest = 'js';

gulp.task('concatJs', function() {
    return gulp.src(jsFiles)
        .pipe(concat('all.js'))
        .pipe(gulp.dest(jsDest));
});

// Minify js
gulp.task('minifyJs', function() {
    return gulp.src('js/all.js')
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

//minify css
gulp.task('minify-css', function() {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('css'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('javascript/*.js', ['eslint', 'concatJs']);
    gulp.watch('js/all.js', ['minifyJs']);
    gulp.watch('sass/*.scss', ['sass']);
    gulp.watch('css/main.css', ['minify-css']);
});

// Default Task
gulp.task('default', ['eslint', 'sass', 'minify-css', 'concatJs', 'minifyJs', 'watch']);

