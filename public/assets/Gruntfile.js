module.exports = function(grunt) {

    // Load all grunt tasks
    require('load-grunt-tasks')(grunt);
    // Show elapsed time at the end
    require('time-grunt')(grunt);

    var LessPluginAutoPrefix = require('less-plugin-autoprefix'),
        autoprefixPlugin = new LessPluginAutoPrefix({browsers: ["last 2 versions", 'IE >= 9']});

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            options: {
                compress: true,
                sourceMap: true,
                sourceMapFileInline: true,
                plugins: [autoprefixPlugin]
            },
            dist: {
                files: {
                    "css/style.css": "less/style.less"
                }
            }
        },
        watch: {
            files: ['less/**/*'],
            tasks: ['less:dist'],
            options: {
                interrupt: false,
                spawn: false
            }
        }
    });
    // Default task(s).
    grunt.registerTask('default', ['less']);

};