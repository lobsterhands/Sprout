module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: 'js/global.js', // input
        dest: 'js/build/global.min.js' // output
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'           // 'compressed' or 'expanded'
        },
        files: {                         // Dictionary of files
          'style.css': 'scss/style.scss'       // 'destination': 'source'
        }
      }
    },

    watch: {
      scripts: {
        files: ['scss/style.scss'],
        tasks: ['sass'],
        options: {
          spawn: false,
        },
      },
    }

  });

  // Load the plugin that provides the "uglify" task.
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  // Load the plugin that provides the "sass" task.
  // grunt.loadNpmTasks('grunt-contrib-sass');
  // Load the plugin that Watches.
  // grunt.loadNpmTasks('grunt-contrib-watch');
  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  // Default task(s).
  grunt.registerTask('default', ['watch']);



};
