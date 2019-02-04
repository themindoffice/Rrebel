// REQUIREMENTS ---------------------------------- //

var gulp				= require("gulp");
var sass				= require("gulp-sass");
var fileinclude			= require("gulp-file-include");
var rename				= require("gulp-rename");
var concat				= require('gulp-concat');
var htmlbeautify 		= require('gulp-html-beautify');
var gulpreplace 		= require('gulp-replace');
var htmlclean 			= require('gulp-htmlclean');
var minify 				= require('gulp-minify');
var removeEmptyLines 	= require('gulp-remove-empty-lines');
var clean 				= require('gulp-clean');
var cleanCSS 			= require('gulp-clean-css');
var directoryExists 	= require('directory-exists');

// VARS ---------------------------------------- //

var sassPath 		= "app/scss";
var includesPath	= "app/php/includes";
var pagesPath		= "app/php/pages";
var jsPath			= "app/js";
var viewsPath		= "app/php/views";
var controllersPath	= "app/php/controllers";
var htmlDest 		= "build/";
var modulesDest 	= "build/modules";
var pagesDest 		= "build/modules/templates_files/";
var includesDest 	= "build/modules/templates_files/includes/";
var jsDest			= "build/assets/js/";
var cssDest			= "build/assets/css/";
var viewsDest		= "build/modules/views/";
var controllersDest	= "build/modules/controllers/";
var indentOptions 	= { indent_size: 1, indent_with_tabs: true };
var includesFound 	= [];
var includesBuilt	= [];

// WATCH -------------------------------------- //

gulp.task("watch", () => {
	gulp.start('build_folders');
	gulp.start('build_html');
	gulp.start('build_php');
	gulp.start('build_js');
	gulp.start('build_css');
	gulp.watch([
		sassPath + "/*.scss",
		"!" + sassPath + "/all.scss",
		includesPath + "/**/*.scss",
		pagesPath + "/*.php",
		includesPath + "/**/*.php",
		jsPath + "/*.js",
		viewsPath + "/*.php",
		controllersPath + "/*.php"
	], ["build_folders", "build_html", "build_php", "build_js", "build_css"]);
});

// BUILD -------------------------------------- //

gulp.task('build_folders', () => {
	var modules 	= directoryExists.sync(modulesDest);
	var pages 		= directoryExists.sync(pagesDest);
	var includes 	= directoryExists.sync(includesDest);

	if (!modules) {
		gulp.src('*.*', {read: false})
			.pipe(gulp.dest(modulesDest));
	}
	if (!pages) {
		gulp.src('*.*', {read: false})
			.pipe(gulp.dest(pagesDest));
	}
	if (!includes) {
		gulp.src('*.*', {read: false})
			.pipe(gulp.dest(includesDest));
	}

	return this;
});

gulp.task('build_html', () => {
	includesFound = [];

	return gulp.src([pagesPath + "/*.php"])
		.pipe(htmlclean())
		.pipe(gulpreplace(/@include\((.*?)\)/g, function(match) {
			var start 		= match.indexOf("'") + 1;
			var end 		= match.indexOf("'", start + 1);
			var result 		= match.substring(start, end);
			var incName 	= result.split('/')[1];
			incName 		= incName.replace('.php', '');

			if (includesFound.indexOf(incName) == -1) {
				includesFound.push(incName);
			}

			return match;
		}))
		.pipe(fileinclude({
			prefix: '@',
			basepath: includesPath
		}))
		.pipe(htmlclean())
		.pipe(gulpreplace(/content{(.*?)}/g, function(match) {
			var start 	= match.indexOf(',') + 1;
			var end 	= match.indexOf('}');
			var result 	= match.substring(start, end);
			result 		= result.replace(' ', '');

			return result;
		}))
		.pipe(gulpreplace(/<content(.*?)>/g, ''))
		.pipe(gulpreplace(/<\/content>/g, ''))
		.pipe(gulpreplace(/<view(.*?)>/g, ''))
		.pipe(gulpreplace(/<\/view>/g, ''))
		.pipe(gulpreplace(/<\?php(.*?)\?>/g, ''))
		.pipe(htmlbeautify(indentOptions))
		.pipe(removeEmptyLines())
		.pipe(rename(function (path) {
			path.extname = ".html";
		}))
		.pipe(gulp.dest("build"));
});

gulp.task('build_php', ['build_folders'], () => {
	includesBuilt = [];

	gulp.src([pagesPath + "/*.php"])
		.pipe(htmlclean())
		.pipe(gulpreplace(/@include\((.*?)\)/g, function(match) {
			var start 		= match.indexOf("'") + 1;
			var end 		= match.indexOf("'", start + 1);
			var result 		= match.substring(start, end);
			var incName 	= result.split('/')[1];

			return '<inc name="'+incName+'">' + match + "</inc>";
		}))
		.pipe(fileinclude({
			prefix: '@',
			basepath: includesPath
		}))
		.pipe(htmlclean())
		.pipe(gulpreplace(/assets\//g, '/assets/'))
		.pipe(gulpreplace(/<content(.*?)>(.*?)<\/content>/g, function(match) {
			var start 	= match.indexOf('name="') + 'name="'.length;
			var end 	= match.indexOf('"', start + 1);
			var result 	= match.substring(start, end);
			result 		= result.replace(' ' , '');
			
			return '{{' + result + '}}';
		}))
		.pipe(gulpreplace(/content{(.*?)}/g, function(match) {
			var start 	= match.indexOf('{') + 1;
			var end 	= match.indexOf(',');
			var result 	= match.substring(start, end);
			result 		= result.replace(' ', '');

			return '{{' + result + '}}';
		}))
		.pipe(gulpreplace(/<view(.*?)>(.*?)<\/view>/g, function(match) {
			var start 	= match.indexOf('name="') + 'name="'.length;
			var end 	= match.indexOf('"', start + 1);
			var result 	= match.substring(start, end);
			result 		= result.replace(' ' , '_');
			
			return '@views_' + result + '@';
		}))
		.pipe(gulpreplace(/<inc(.*?)>(.*?)<\/inc>/g, function(match) {
			var start 	= match.indexOf('name="') + 'name="'.length;
			var end 	= match.indexOf('"', start + 1);
			var result 	= match.substring(start, end);

			BuildInclude(result, match);

			return '<?php include("includes/' + result + '") ?>';
		}))
		.pipe(htmlbeautify(indentOptions))
		.pipe(removeEmptyLines())
		.pipe(gulp.dest(pagesDest))

	gulp.src([viewsPath + "/*.php"])
		.pipe(gulp.dest(viewsDest))

	gulp.src([controllersPath + "/*.php"])
		.pipe(gulp.dest(controllersDest))
});

function BuildInclude(filename, html) {
	if (includesBuilt.indexOf(filename) == -1) {
		require('fs').writeFileSync(includesDest + filename, html);

		includesBuilt.push(filename);

		gulp.src([includesDest + filename])
			.pipe(htmlclean())
			.pipe(gulpreplace(/<inc(.*?)>/g, ''))
			.pipe(gulpreplace(/<\/inc>/g, ''))
			.pipe(htmlbeautify(indentOptions))
			.pipe(removeEmptyLines())
			.pipe(gulp.dest(includesDest));
	}
}

gulp.task('build_js', function() {
	gulp.src([jsPath + "/*.js"])
		.pipe(concat('all.js'))

		.pipe(minify({
			ext:{
	            src:'.js',
	            min:'.min.js'
	        }
		}))
		.pipe(gulp.dest(jsDest));
});

gulp.task("build_css", ['build_html'], () => {
	var sassFiles = [];

	sassFiles.push(sassPath + "/style.scss");

	for (i=0; i < includesFound.length; i++) {
		sassFiles.push(includesPath + "/**/" + includesFound[i] + ".scss");
	}

	gulp.src(sassFiles)
		.pipe(concat('all.scss'))
		.pipe(gulp.dest(sassPath))
		.pipe(clean({force: true}))
		.pipe(sass())
		.pipe(rename('style.css'))
		.pipe(gulp.dest(cssDest))
		.pipe(rename('style.min.css'))
		.pipe(cleanCSS())
		.pipe(gulp.dest(cssDest))
});