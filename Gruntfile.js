module.exports = function(grunt) {


  //Initializing the configuration object
  grunt.initConfig({

      // Task configuration
    less: {
      dist: {
          options: {
            compress: true,  //minifying the result
          },
          files: {
            //compiling frontend.less into frontend.css
            "./public/assets/stylesheets/frontend.css": "./app/frontend/css/frontend.less",
            //compiling backend.less into backend.css
            "./public/assets/stylesheets/backend.css": "./app/frontend/css/backend.less"
          }
      }
    },
    copy: {
      dist: {
        files: [{
          expand: true,
          dot: true,
          cwd: 'app/frontend',
          dest: 'public/frontend/',
          src: [
            '**',
          ]
        }, {
          expand: true,
          cwd: '.tmp/images',
          dest: './public/images',
          src: ['generated/*']
        }]
      }
    },
    concat: {
      options: {
        separator: ';',
      },
      js_frontend: {
        src: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './app/frontend/js/frontend.js'
        ],
        dest: './public/assets/javascript/frontend.js',
      },
      js_backend: {
        src: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './app/frontend/js/backend.js'
        ],
        dest: './public/assets/javascript/backend.js',
      },
    },
    uglify: {
      options: {
        mangle: false  // Use if you want the names of your functions and variables unchanged
      },
      // frontend: {
      //   files: {
      //     './public/assets/javascript/frontend.js': './public/assets/javascript/frontend.js',
      //   }
      // },
      // backend: {
      //   files: {
      //     './public/assets/javascript/backend.js': './public/assets/javascript/backend.js',
      //   }
      // },
    },
    phpunit: {
        classes: {
        },
        options: {
        }
    },
    useminPrepare: {
      html: './app/views/layouts/master.blade.php',
      options: {
        dest: './public/frontend/',
        flow: {
          html: {
            steps: {
              js: ['concat', 'uglifyjs'],
              css: ['cssmin']
            },
            post: {}
          }
        }
      }
    },

    // Performs rewrites based on rev and the useminPrepare configuration
    usemin: {
      html: ['./app/views/{,*/}*.blade.php'],
      css: ['./app/frontend/css/{,*/}*.css'],
      options: {
        assetsDirs: ['./public/frontend/']
      }
    },

    // The following *-min tasks produce minified files in the dist folder
    cssmin: {
      options: {
        // root: '<%= yeoman.app %>',
        relativeTo: '.',
        processImport: true,
        noAdvanced: true
      }
    },
    bowerInstall: {
      app: {
        src: ['app/views/layouts/master.blade.php'],
        ignorePath: '../../',
        exclude: ['requirejs',
                  'mocha',
                  'jquery.vmap.europe.js',
                  'jquery.vmap.usa.js',
                  'Chart.min.js',
                  'raphael',
                  'morris',
                  'jquery.inputmask',
                  'jquery.validate.js',
                  'jquery.stepy.js'
                  ]
      }
    },
    watch: {
        js_frontend: {
          files: [
            //watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/frontend/js/frontend.js'
            ],   
          tasks: ['concat:js_frontend','uglify:frontend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        js_backend: {
          files: [
            //watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/frontend/js/backend.js'
          ],   
          tasks: ['concat:js_backend','uglify:backend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        less: {
          files: ['./app/frontend/css/*.less'],  //watched files
          tasks: ['less'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        tests: {
          files: ['app/controllers/*.php','app/models/*.php'],  //the task will run only when you save files in this location
          tasks: ['phpunit']
        }
      }
  });

  // Plugin loading
  grunt.loadNpmTasks('grunt-bower-install');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-usemin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-phpunit');

  // Task definition
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('build', [
    // 'clean:dist',
    'bowerInstall',
    // 'ngtemplates',
    // 'useminPrepare',
    // 'concurrent:dist',
    'less:dist',
    // 'autoprefixer',
    // 'concat',
    // 'ngmin',
    // 'copy:dist',
    // 'cdnify',
    // 'cssmin',
    // 'uglify',
    // 'rev',
    // 'usemin',
    // 'processhtml:dist',
    // 'htmlmin'
  ]);

};

