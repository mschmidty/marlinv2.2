module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['js/lib/*.js', 'js/global.js'],
        dest: 'js/build/global.min.js'
      }
    },
    sass: {
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
      },
          files: {                         // Dictionary of files
        'css/style.css': 'css/global.scss'       // 'destination': 'source'
        }
      }
    },
    autoprefixer: {
        files: {
          src:'css/style.css',
          dest: 'style.css'
        }
    },
    watch: {
      options: {
        livereload:true,
      },
      sass: {
        options: {
          livereload:false
        },
        files: ['css/**/*.scss', 'css/*.scss'],
        tasks: ['sass', 'autoprefixer']
      },
      autoprefixer: {
        files: ['css/styles.css'],
        tasks: ['autoprefixer']
      }
    }
  });
  
  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['uglify','sass', 'autoprefixer']);

};