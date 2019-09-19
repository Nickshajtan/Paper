//Для корректного использования временно отключи Наск в index.php

var gulp = require('gulp'),
    jade = require('gulp-jade');
 
// чтобы запустить эту задачу, наберите в командной строке gulp jade
gulp.task('jade', function() {
    return gulp.src('./*.jade')
        .pipe(jade()) 
        .pipe(gulp.dest('./')); // указываем gulp куда положить скомпилированные HTML файлы
});

//нужно установить модуль для php
//https://github.com/everzet/jade.php
/*var gulp = require('gulp'), 
jphp = require('gulp-jade-php');

// чтобы запустить эту задачу, наберите в командной строке gulp template
gulp.task('template', function() {
  gulp.src('./preprocess/jade/*.jade')
    .pipe(jade())
    .pipe(gulp.dest('./html/php'));
});*/
/*
var gulpless = require('gulp'),
    less = require('gulp-less');

// чтобы запустить эту задачу, наберите в командной строке gulp less
gulpless.task('less', function() {
    return gulp.src('./styles/*.less')
        .pipe(less()) 
        .pipe(gulp.dest('./styles')); // указываем gulp куда положить скомпилированные HTML файлы
});

gulp.task('json-test', function() {
  return gulp.src('./preprocess/jade/*.jade')
    .pipe(data(function(file) {
      return require(path.basename(file.path) + '.json');
    }))
    .pipe(jade())
    .pipe(gulp.dest('./html'));
});

*/
//https://habrahabr.ru/post/251807/