var  project    = require('./package.json'),
gulp            = require('gulp'),
autoPrefixer    = require('gulp-autoprefixer'),
clean           = require('gulp-clean'),
minifyCSS       = require('gulp-clean-css'),
minifyJS        = require('gulp-minify'),
rename          = require('gulp-rename');
zip             = require('gulp-zip');

const sass = require('gulp-sass')(require('sass'));
gulp.task('sass', function() {
	return gulp.src(['style.scss'], { cwd: 'src/sass' })
	.pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
	.pipe(autoPrefixer({ browsers: ["> 1%", "last 2 versions"] }))
	.pipe(gulp.dest('assets/css/'))
	.pipe(minifyCSS())
	.pipe(rename({ extname: '.min.css' }))
	.pipe(gulp.dest('assets/css/'))
});

gulp.task('minifyjs', function() {
	return gulp.src(['assets/js/main.js'])
	.pipe(minifyJS({
		noSource: true,
		ext:{min:'.min.js'}
	}))
	.pipe(gulp.dest('assets/js'))
});

gulp.task('clean', function () {
	return gulp.src('__build/*.*', {read: false})
	.pipe(clean());
});

gulp.task('zip', function () {
	return gulp.src(['**', '!__*/**', '!node_modules/**', '!src/**', '!gulpfile.js', '!.DS_Store', '!package.json', '!package-lock.json', '!todo.txt', '!sftp-config.json', '!testing.html'], { base: '..' })
	.pipe(zip(project.name+'.zip'))
	.pipe(gulp.dest('__build'));
});

gulp.task('watch', function() {
	gulp.watch(['src/sass/**/*.scss'], gulp.series('sass'));
	gulp.watch(['assets/js/main.js'], gulp.series('minifyjs'));
});

gulp.task('build', gulp.series('sass','minifyjs','clean','zip'));

gulp.task('default', gulp.series('sass','minifyjs','watch'));