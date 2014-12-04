var gulp = require('gulp'),
    less = require('gulp-less'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps');

var publish_path = '../../../public/assets/admin/';

var files = {
    css: [
        'vendor/semantic-ui/semantic.css',
        'css/kash.css'
    ],
    js: [
        'vendor/jquery/jquery.js',
        'vendor/semantic-ui/semantic.js',
        'js/**/*.js'
    ]
};

gulp.task('less', function(){
    gulp.src('less/kash.less')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('css'));
});

gulp.task('css', ['less'], function(){
    gulp.src(files.css)
        .pipe(concat('style.css'))
        .pipe(minify())
        .pipe(gulp.dest(publish_path+'css'));
});

gulp.task('js', function(){
    gulp.src(files.js)
        .pipe(sourcemaps.init())
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(publish_path+'js'));
});

gulp.task('default', function(){
    gulp.start('css', 'js');
});





