const gulp = require('gulp');
const browserSync = require('browser-sync').create();

// BrowserSync
gulp.task('browserSync', function(){
    browserSync.init({
        proxy: 'http://localhost/my-projects/html-css-reflection',
        browser: ['firefox', 'chrome'],
        files: [
            "css/*.css", "*.php", "inc/*.php", "js/*.js"
        ]
    });
});
