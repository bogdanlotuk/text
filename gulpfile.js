var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
   return gulp.src('./scss/**/*.scss')
        .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
       .pipe(autoprefixer({
           browsers: ['last 10 versions'],
           cascade: false
       }))
       .pipe(gulp.dest('./css'))

});
gulp.task('watch', function(){
    gulp.watch('./scss/**/*.scss', ['sass'])
});



gulp.task('default', ['watch']);