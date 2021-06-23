const gulp = require('gulp');
const sass = require('gulp-sass');
const glob = require('gulp-sass-glob');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify-es').default;
const webpackStream = require('webpack-stream');
const webpack = require('webpack');
const webpackConfig = require('./webpack.config');
const pngquant = require('imagemin-pngquant');
const imagemin = require('gulp-imagemin');
const mozjpeg = require('imagemin-mozjpeg');

const paths = {
    css : {
        src : 'src/scss/**/*.scss',
        dist : 'css/'
    },
    js : {
        src : 'src/js/**/*.js',
        dist : 'js/'
    },
    images : {
        src : 'src/images/**/*.{jpg,jpeg,png,gif,svg}',
        dist : 'images/'
    }
};

// css 
function cssFunc() {
    return gulp.src(paths.css.src)
    .pipe(plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(glob())
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(autoprefixer({cascade: false, grid: true}))
    .pipe(gulp.dest(paths.css.dist, {sourcemaps: false}))
}

// js 
function jsFunc() {
    return plumber({
        errorHandler: notify.onError('<%= error.message %>'),
    })
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(babel())
    .pipe(uglify({}))
    .pipe(gulp.dest(paths.js.dist));
}

// image
const imagesBase = [
    pngquant({
        quality: [0.7, 0.85]
    }),
    mozjpeg({
        quality: 85
    }),
    imagemin.gifsicle(),
    imagemin.mozjpeg(),
    imagemin.optipng(),
    imagemin.svgo({
        plugins: [
            { removeViewBox: false },
            { removeMetadata: false },
            { removeUnknownsAndDefaults: false },
            { convertShapeToPath: false },
            { collapseGroups: false },
            { cleanupIDs: false }
        ]
    })
];
function imagesFunc() {
    return gulp.src(paths.images.src, { since: gulp.lastRun(imagesFunc) })
    .pipe(plumber({ errorHandler: notify.onError("<%= error.message %>") }))
    .pipe(imagemin(imagesBase))
    .pipe(gulp.dest(paths.images.dist));
}

// watch
function watchFunc(done) {
    gulp.watch(paths.css.src, gulp.parallel(cssFunc));
    gulp.watch(paths.js.src, gulp.parallel(jsFunc));
    gulp.watch(paths.images.src, gulp.parallel(imagesFunc));
    done();
}

exports.default = watchFunc;