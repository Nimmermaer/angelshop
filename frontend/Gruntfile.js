module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      javascript: {
        files: ['JavaScript/scripts.js'],
        tasks: ['jshint'],
        options: {nospawn: true}
      },
      css: {
        files: ['Less/**/*.{less,scss,sass}'],
        tasks: ['less'],
        options: {nospawn: true}
      },
      gruntfile: {
        files: 'Gruntfile.js',
        tasks: ['jshint:gruntfile']
      },
      src: {
        files: [
          'JavaScript/scripts.js',
          'Less/**/*.{less,scss,sass}'
        ],
        tasks: ['default']
      }
    },
    jshint: {
      options: {
        bitwise: true,
        browser: true,
        camelcase: true,
        curly: true,
        devel: true,
        eqeqeq: true,
        immed: false,
        jquery: true,
        maxcomplexity: 30,
        maxdepth: 8,
        maxlen: 200,
        maxparams: 5,
        maxstatements: 60,
        newcap: true,
        undef: false,
        unused: false,
        noarg: true,
        nonew: false,
        quotmark: 'single',
        trailing: true,
        white: false,
        globals: ['_', 'jQuery', '$', 'undef']
      },
      all: ['!JavaScript/*.js', 'JavaScript/scripts.js']
    },
    concat: {
      custom: {
        src: [
          'node_modules/slick-carousel/slick/slick.js',
          'node_modules/lightbox2/dist/js/lightbox.js',
          'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
          'node_modules/jquery-match-height/dist/jquery.matchHeight.js',
          'JavaScript/analytics.js',
          'JavaScript/cookiebar.js',
          'JavaScript/scripts.js',
        ],
        dest: '../packages/angelshop/Resources/Public/JavaScript/custom.js'
      },
    },
    uglify: {
      options: {
        sourceMap: false
      },
      dist: {
        files: {
          '../packages/angelshop/Resources/Public/JavaScript/jquery.min.js': ['node_modules/jquery/dist/jquery.js'],
          '../packages/angelshop/Resources/Public/JavaScript/bootstrap.min.js': ['node_modules/bootstrap/dist/js/bootstrap.js'],
          '../packages/angelshop/Resources/Public/JavaScript/custom.min.js': ['../packages/angelshop/Resources/Public/JavaScript/custom.js']
        }
      }
    },
    stripCssComments: {
      dist: {
        files: {
          '../packages/angelshop/Resources/Public/Css/angelshop_comment.css': '../packages/angelshop/Resources/Public/Css/angelshop.css'
        }
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1,
        report: 'gzip'
      },
      compress: {
        files: {
          '../packages/angelshop/Resources/Public/Css/angelshop.min.css': ['../packages/angelshop/Resources/Public/Css/angelshop_comment.css'],
          '../packages/angelshop/Resources/Public/Css/angelshop_critical.min.css': ['../packages/angelshop/Resources/Public/Css/angelshop_critical.css'],
          '../packages/angelshop/Resources/Public/Css/modern-business.css': ['node_modules/startbootstrap-modern-business/dist/css/styles.css']
        }
      }
    },
    sprite: {
      angelshop: {
        src: 'Images/*.png',
        dest: 'Icons/spritesheet.png',
        destCss: '../packages/angelshop/Resources/Public/Css/sprites.css'
      }
    },
    less: {
      angelshop: {
        options: {
          strictMath: true,
          sourceMap: false,
          outputSourceFiles: true
        },
        src: [
          'node_modules/startbootstrap-modern-business/css/modern-business.css',
          'Less/angelshop.less'
        ],
        dest: '../packages/angelshop/Resources/Public/Css/angelshop.css'
      }
    },
    copy: {
      images: {
        expand: true,
        cwd: 'Images',
        src: '**/*',
        dest: '../packages/angelshop/Resources/Public/Images'
      },
      icons: {
        expand: true,
        cwd: 'Icons',
        src: '**/*',
        dest: '../packages/angelshop/Resources/Public/Icons'
      },
      fonts: {
        expand: true,
        cwd: 'Fonts',
        src: '**/*',
        dest: '../packages/angelshop/Resources/Public/Fonts'
      },
      awesomeFonts: {
        expand: true,
        cwd: 'node_modules/font-awesome/fonts',
        src: '**/*',
        dest: '../packages/angelshop/Resources/Public/fonts'
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-strip-css-comments');

  grunt.registerTask('default', ['sprite', 'copy', 'less', 'jshint', 'concat', 'uglify', 'stripCssComments', 'cssmin']);
};
