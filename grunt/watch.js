module.exports = function (grunt) {
    return {
        css: {
            files: grunt.config.get('assetsDir') + "**/css/**/*.css",
            options: {
                livereload: true
            }
        },
        views: {
            files: grunt.config.get('viewsDir') + "**/*.twig",
            options: {
                livereload: true
            }
        }

    }
}