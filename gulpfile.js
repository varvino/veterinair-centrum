const { src, dest, watch, gulp } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');

function css() {
    return src('./src/sass/*.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(dest('./dist/css/'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function js() {
    return src('./src/js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(dest('./dist/js/', { sourcemaps: true }));
}

function browser() {
    browserSync.init(null, {
        proxy: 'localhost/veterinair-centrum/', // 'dev.site.com' in your example
        files: [
            './**/*.php',
            '*.php'
        ]
    });

    watch('./src/sass/**/*.scss', css);
    watch('./src/js/*.js', js).on('change', browserSync.reload);
}

function imageMinify() {
    return src('./src/gfx/**/*.*')
        .pipe(imagemin())
        .pipe(dest('./dist/gfx/'))
}

exports.imagemin = imageMinify;
exports.css = css;
exports.js = js;
exports.default = browser;